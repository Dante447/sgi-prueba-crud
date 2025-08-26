const express = require("express");
const router = express.Router();
const db = require("../config/connection");

const LOW_STOCK_LIMIT = 5;

// =====================
// Ruta: Alertas de stock
// =====================
router.get('/stock-status', (req, res) => {
  const query = `
    SELECT id_producto, nombre, cantidad_disponible AS stock 
    FROM productos
  `;

  db.query(query, (err, results) => {
    if (err) {
      console.error('Error al obtener productos:', err);
      // 🔹 Siempre devolver un array, aunque sea vacío
      return res.json([]);
    }

    // Si no hay productos, devolvemos array vacío
    if (!results || results.length === 0) {
      return res.json([]);
    }

    const productosConEstado = results.map(prod => {
      let estado = "Disponible";
      if (prod.stock === 0) estado = "Agotado";
      else if (prod.stock <= LOW_STOCK_LIMIT) estado = "Bajo";
      return { ...prod, estado };
    });

    res.json(productosConEstado);
  });
});

// =====================
// Ruta: Estadísticas del dashboard
// =====================
router.get("/stats", (req, res) => {
  const sql = `
    SELECT 
      (SELECT COUNT(*) FROM productos WHERE cantidad_disponible BETWEEN 1 AND 5) AS stockCritico,
      (SELECT COUNT(*) FROM productos) AS totalProductos,
      (SELECT COUNT(*) FROM usuarios) AS totalUsuarios,
      (SELECT COUNT(*) FROM productos WHERE cantidad_disponible = 0) AS agotados
  `;

  db.query(sql, (err, results) => {
    if (err) {
      console.error("❌ Error obteniendo estadísticas:", err);
      return res.status(500).json({ error: "Error al obtener estadísticas" });
    }
    res.json(results[0]);
  });
});

module.exports = router;

