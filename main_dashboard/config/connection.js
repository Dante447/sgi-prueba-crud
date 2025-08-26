const mysql = require('mysql');

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'proyecto' // tu base de datos
});

db.connect(err => {
    if (err) {
        console.error('❌ Error de conexión a la BD:', err);
        return;
    }
    console.log('✅ Conectado a la BD MySQL');
});

module.exports = db;
