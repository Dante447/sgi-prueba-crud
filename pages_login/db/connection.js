const mysql = require('mysql2');

const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '', // tu contraseña aquí
    database: 'proyecto' // asegúrate que esta BD exista
});

connection.connect((err) => {
    if (err) throw err;
    console.log('Base de datos conectada');
});

module.exports = connection;
