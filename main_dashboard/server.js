// server.js
const express = require("express");
const cors = require("cors");
const bodyParser = require("body-parser");
const alertsRoutes = require("./routes/alertsRoutes");

const app = express();
const PORT = 3001;

// Middlewares
app.use(cors());
app.use(bodyParser.json());

// Rutas (prefijo /api)
app.use("/api", alertsRoutes);

// Iniciar servidor
app.listen(PORT, () => {
  console.log(`🚀 Servidor backend de alertas activo en http://localhost:${PORT}`);
});
