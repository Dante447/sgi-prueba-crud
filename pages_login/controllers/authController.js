const db = require('../db/connection');
const bcrypt = require('bcrypt');

// Registro 
exports.register = (req, res) => {
    const { nombres, apellidos, correo, password } = req.body;

    if (!nombres || !apellidos || !correo || !password)
        return res.status(400).json({ error: 'Todos los campos son obligatorios' });

    // Verificamos si ya existe un correo igual
    const checkQuery = 'SELECT * FROM usuarios WHERE correo = ?';
    db.query(checkQuery, [correo], (err, result) => {
        if (err) return res.status(500).json({ error: 'Error al verificar correo' });
        if (result.length > 0) return res.status(409).json({ error: 'El correo ya está registrado' });

        // Encriptar contraseña
        bcrypt.hash(password, 10, (err, hash) => {
            if (err) return res.status(500).json({ error: 'Error al encriptar contraseña' });

            const insertQuery = `
                INSERT INTO usuarios (nombres, apellidos, correo, password)
                VALUES (?, ?, ?, ?)`;

            db.query(insertQuery, [nombres, apellidos, correo, hash], (err) => {
                if (err) return res.status(500).json({ error: 'Error al registrar usuario' });

                res.status(201).json({ message: 'Registro exitoso' });
            });
        });
    });
};

// Login 
exports.login = (req, res) => {
    const { correo, password } = req.body;

    const query = 'SELECT * FROM usuarios WHERE correo = ?';
    db.query(query, [correo], (err, results) => {
        if (err) return res.status(500).json({ error: 'Error de consulta' });
        if (results.length === 0) return res.status(401).json({ error: 'Usuario no encontrado' });

        const user = results[0];

        bcrypt.compare(password, user.password, (err, isMatch) => {
            if (err) return res.status(500).json({ error: 'Error al comparar contraseñas' });
            if (!isMatch) return res.status(401).json({ error: 'Contraseña incorrecta' });

            res.status(200).json({ message: 'Inicio de sesión exitoso', user: {
                id: user.id,
                nombres: user.nombres,
                apellidos: user.apellidos,
                correo: user.correo
            }});
        });
    });
};

