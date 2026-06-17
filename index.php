<?php
$appName = "Ambar Shield";
$companyTagline = "Erradicación, contención y respuesta ante incidentes de ciberseguridad";

$documents = [
  [
    "title" => "Metas Corporativas",
    "category" => "procedimientos",
    "type" => "PDF",
    "size" => "200.4 MB",
    "date" => "2026",
    "summary" => "Documento de la cascada de metas que conecta objetivos empresariales, metas de TI y procesos de gobierno.",
    "file" => "docs/1-Metas_Corporativas.pdf"
  ],
  [
    "title" => "Metas de TI",
    "category" => "procedimientos",
    "type" => "PDF",
    "size" => "1.8 MB",
    "date" => "2026",
    "summary" => "Pasos operativos para aislar activos comprometidos y reducir el impacto.",
    "file" => "docs/2-Metas_TI.pdf"
  ],
  [
    "title" => "Cascada de Metas",
    "category" => "reportes",
    "type" => "PDF",
    "size" => "900 KB",
    "date" => "2026",
    "summary" => "Plantilla para entregar hallazgos, impacto, causa raíz y recomendaciones.",
    "file" => "docs/3-Cascada de Metas.pdf"
  ],
  [
    "title" => "Mapa Estratégico",
    "category" => "evidencias",
    "type" => "PDF",
    "size" => "760 KB",
    "date" => "2026",
    "summary" => "Lista de evidencias mínimas para análisis forense y trazabilidad.",
    "file" => "docs/4-Mapa estrategico.pdf"
  ],
  [
    "title" => "Caso de Negocio",
    "category" => "guias",
    "type" => "PDF",
    "size" => "1.2 MB",
    "date" => "2026",
    "summary" => "Recomendaciones técnicas posteriores a la erradicación del incidente.",
    "file" => "docs/5-Caso_Negocio.pdf"
  ],
  [
    "title" => "Cédula de Servicio con Procesos",
    "category" => "politicas",
    "type" => "PDF",
    "size" => "514 MB",
    "date" => "2026",
    "summary" => "Lineamientos internos para clasificar, escalar y documentar incidentes.",
    "file" => "docs/6-Cedula de servicio con procesos.pdf"
  ],
  [
    "title" => "Inventario de Activos",
    "category" => "procedimientos",
    "type" => "PDF",
    "size" => "203 MB",
    "date" => "2026",
    "summary" => "Lineamientos internos para clasificar, escalar y documentar incidentes.",
    "file" => "docs/7-Inventario_Activos.pdf"
  ],
  [
    "title" => "Matriz de Riesgos",
    "category" => "guias",
    "type" => "PDF",
    "size" => "191 MB",
    "date" => "2026",
    "summary" => "Lineamientos internos para clasificar, escalar y documentar incidentes.",
    "file" => "docs/8-Matriz de riesgos.pdf"
  ],
  [
    "title" => "BIA Táctico",
    "category" => "politicas",
    "type" => "PDF",
    "size" => "417 MB",
    "date" => "2026",
    "summary" => "Lineamientos internos para clasificar, escalar y documentar incidentes.",
    "file" => "docs/9-BIA Tactico.pdf"
  ],
  [
    "title" => "BIA Operacional",
    "category" => "politicas",
    "type" => "PDF",
    "size" => "223 MB",
    "date" => "2026",
    "summary" => "Lineamientos internos para clasificar, escalar y documentar incidentes.",
    "file" => "docs/10-BIA Operacional.pdf"
  ],
  [
    "title" => "Plan de Continuidad",
    "category" => "guias",
    "type" => "PDF",
    "size" => "288 KB",
    "date" => "2026",
    "summary" => "Lineamientos internos para clasificar, escalar y documentar incidentes.",
    "file" => "docs/11-Plan de Continuidad.pdf"
  ]

];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php echo $appName; ?> | Respuesta a Incidentes</title>

  <style>
    :root {
  --bg: #050816;
  --bg-soft: #0b1024;
  --bg-card: rgba(255, 255, 255, 0.06);
  --primary: #00e5ff;
  --primary-soft: rgba(0, 229, 255, 0.15);
  --secondary: #7c3aed;
  --success: #22c55e;
  --warning: #f59e0b;
  --danger: #ef4444;
  --text: #f8fafc;
  --muted: #94a3b8;
  --border: rgba(255, 255, 255, 0.12);
  --shadow: 0 20px 60px rgba(0, 0, 0, 0.35);
  --radius: 22px;
}

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
    }

   body {
  font-family: Arial, Helvetica, sans-serif;
  background:
    radial-gradient(circle at top left, rgba(250, 204, 21, 0.22), transparent 34%),
    radial-gradient(circle at top right, rgba(249, 115, 22, 0.18), transparent 34%),
    linear-gradient(180deg, #ffffff 0%, #fffaf0 55%, #ffffff 100%);
  color: var(--text);
  min-height: 100vh;
}

    a {
      color: inherit;
      text-decoration: none;
    }

    .container {
      width: min(1180px, 92%);
      margin: 0 auto;
    }

    header {
      position: sticky;
      top: 0;
      z-index: 50;
      backdrop-filter: blur(18px);
      background: rgba(5, 8, 22, 0.82);
      border-bottom: 1px solid var(--border);
    }

    .navbar {
      height: 76px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 800;
      letter-spacing: 0.3px;
    }

    .brand-icon {
      width: 42px;
      height: 42px;
      border-radius: 14px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      box-shadow: 0 0 28px rgba(0, 229, 255, 0.28);
    }

    .brand small {
      display: block;
      color: var(--muted);
      font-weight: 500;
      font-size: 12px;
      margin-top: 2px;
    }

    nav {
      display: flex;
      align-items: center;
      gap: 24px;
      color: var(--muted);
      font-size: 14px;
    }

    nav a:hover {
      color: var(--primary);
    }

    .btn {
      border: none;
      border-radius: 999px;
      padding: 12px 18px;
      font-weight: 700;
      cursor: pointer;
      transition: 0.2s ease;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    .btn-primary {
      color: #001018;
      background: linear-gradient(135deg, var(--primary), #8be9ff);
      box-shadow: 0 14px 36px rgba(0, 229, 255, 0.22);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 20px 44px rgba(0, 229, 255, 0.32);
    }

    .btn-ghost {
      color: var(--text);
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid var(--border);
    }

    .btn-ghost:hover {
      background: rgba(255, 255, 255, 0.12);
      transform: translateY(-2px);
    }

    .hero {
      padding: 86px 0 52px;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1.08fr 0.92fr;
      gap: 34px;
      align-items: center;
    }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 8px 14px;
      border: 1px solid var(--border);
      border-radius: 999px;
      color: var(--primary);
      background: rgba(0, 229, 255, 0.08);
      font-size: 13px;
      margin-bottom: 22px;
    }

    .pulse {
      width: 9px;
      height: 9px;
      border-radius: 999px;
      background: var(--success);
      box-shadow: 0 0 0 8px rgba(34, 197, 94, 0.12);
    }

    h1 {
      font-size: clamp(42px, 6vw, 72px);
      line-height: 0.95;
      letter-spacing: -2.6px;
      margin-bottom: 22px;
    }

    .gradient-text {
      background: linear-gradient(135deg, var(--primary), #ffffff, #a78bfa);
      -webkit-background-clip: text;
      color: transparent;
    }

    .hero p {
      color: var(--muted);
      font-size: 18px;
      line-height: 1.7;
      max-width: 650px;
      margin-bottom: 28px;
    }

    .hero-actions {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
    }

    .hero-panel {
      position: relative;
      padding: 22px;
      border: 1px solid var(--border);
      background: linear-gradient(180deg, rgba(255,255,255,0.09), rgba(255,255,255,0.035));
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow: hidden;
    }

    .hero-panel::before {
      content: "";
      position: absolute;
      width: 220px;
      height: 220px;
      right: -80px;
      top: -80px;
      background: rgba(0, 229, 255, 0.12);
      border-radius: 999px;
      filter: blur(4px);
    }

    .terminal {
      position: relative;
      background: rgba(0, 0, 0, 0.45);
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 18px;
      overflow: hidden;
    }

    .terminal-top {
      padding: 14px;
      display: flex;
      align-items: center;
      gap: 8px;
      border-bottom: 1px solid var(--border);
      background: rgba(255, 255, 255, 0.04);
    }

    .dot {
      width: 11px;
      height: 11px;
      border-radius: 50%;
    }

    .red { background: #ef4444; }
    .yellow { background: #f59e0b; }
    .green { background: #22c55e; }

    .terminal-body {
      padding: 20px;
      font-family: "Courier New", monospace;
      font-size: 14px;
      line-height: 1.8;
      color: #cbd5e1;
    }

    .terminal-body span {
      color: var(--primary);
    }

    .status-ok {
      color: var(--success) !important;
    }

    .status-danger {
      color: var(--danger) !important;
    }

    section {
      padding: 48px 0;
    }

    .section-title {
      display: flex;
      align-items: end;
      justify-content: space-between;
      gap: 20px;
      margin-bottom: 24px;
    }

    .section-title h2 {
      font-size: clamp(30px, 4vw, 44px);
      letter-spacing: -1.4px;
    }

    .section-title p {
      color: var(--muted);
      max-width: 560px;
      line-height: 1.6;
    }

    .metrics {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    .metric-card,
    .service-card,
    .dashboard-card,
    .timeline-card,
    .contact-card {
      border: 1px solid var(--border);
      background: var(--bg-card);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .metric-card {
      padding: 20px;
    }

    .metric-card .label {
      color: var(--muted);
      font-size: 13px;
      margin-bottom: 12px;
    }

    .metric-card .value {
      font-size: 34px;
      font-weight: 900;
      letter-spacing: -1px;
      margin-bottom: 10px;
    }

    .metric-card .trend {
      font-size: 13px;
      color: var(--success);
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .service-card {
      padding: 24px;
      position: relative;
      overflow: hidden;
      transition: 0.2s ease;
    }

    .service-card:hover {
      transform: translateY(-4px);
      border-color: rgba(0, 229, 255, 0.45);
    }

    .service-icon {
      width: 48px;
      height: 48px;
      border-radius: 16px;
      display: grid;
      place-items: center;
      background: var(--primary-soft);
      color: var(--primary);
      font-size: 24px;
      margin-bottom: 18px;
    }

    .service-card h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .service-card p {
      color: var(--muted);
      line-height: 1.6;
      font-size: 15px;
    }

    .dashboard-grid {
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: 18px;
    }

    .dashboard-card {
      padding: 22px;
    }

    .dashboard-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      margin-bottom: 18px;
    }

    .dashboard-header h3 {
      font-size: 22px;
    }

    .search-box {
      width: 100%;
      max-width: 280px;
      padding: 12px 14px;
      border-radius: 999px;
      border: 1px solid var(--border);
      background: rgba(255, 255, 255, 0.06);
      color: var(--text);
      outline: none;
    }

    .filters {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      margin-bottom: 16px;
    }

    .filter-btn {
      padding: 9px 12px;
      border-radius: 999px;
      border: 1px solid var(--border);
      background: rgba(255,255,255,0.06);
      color: var(--muted);
      cursor: pointer;
      font-weight: 700;
      font-size: 13px;
    }

    .filter-btn.active,
    .filter-btn:hover {
      color: #001018;
      background: var(--primary);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      overflow: hidden;
    }

    th {
      color: var(--muted);
      text-align: left;
      font-size: 12px;
      font-weight: 700;
      padding: 14px 10px;
      border-bottom: 1px solid var(--border);
    }

    td {
      padding: 16px 10px;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      color: #e2e8f0;
      font-size: 14px;
    }

    tr:hover td {
      background: rgba(255,255,255,0.035);
    }

    .badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 7px 10px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 800;
    }

    .badge.critical {
      color: #fecaca;
      background: rgba(239, 68, 68, 0.16);
    }

    .badge.high {
      color: #fed7aa;
      background: rgba(245, 158, 11, 0.16);
    }

    .badge.medium {
      color: #bfdbfe;
      background: rgba(59, 130, 246, 0.16);
    }

    .badge.closed {
      color: #bbf7d0;
      background: rgba(34, 197, 94, 0.16);
    }

    .chart {
      display: grid;
      gap: 16px;
      margin-top: 8px;
    }

    .bar-row {
      display: grid;
      grid-template-columns: 110px 1fr 44px;
      align-items: center;
      gap: 12px;
      color: var(--muted);
      font-size: 14px;
    }

    .bar-track {
      height: 12px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.08);
      overflow: hidden;
    }

    .bar-fill {
      height: 100%;
      border-radius: 999px;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
    }

    .timeline {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    .timeline-card {
      padding: 22px;
      position: relative;
    }

    .step-number {
      width: 38px;
      height: 38px;
      border-radius: 14px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: #001018;
      font-weight: 900;
      margin-bottom: 16px;
    }

    .timeline-card h3 {
      margin-bottom: 10px;
      font-size: 18px;
    }

    .timeline-card p {
      color: var(--muted);
      line-height: 1.6;
      font-size: 14px;
    }

    .contact-grid {
      display: grid;
      grid-template-columns: 0.9fr 1.1fr;
      gap: 18px;
    }

    .contact-card {
      padding: 24px;
    }

    .contact-card h3 {
      font-size: 24px;
      margin-bottom: 12px;
    }

    .contact-card p {
      color: var(--muted);
      line-height: 1.7;
      margin-bottom: 18px;
    }

    .contact-list {
      display: grid;
      gap: 14px;
      color: #cbd5e1;
    }

    .form-grid {
      display: grid;
      gap: 14px;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
    }

    input,
    select,
    textarea {
      width: 100%;
      padding: 14px 15px;
      border-radius: 16px;
      border: 1px solid var(--border);
      background: rgba(255,255,255,0.06);
      color: var(--text);
      outline: none;
      font-family: inherit;
    }

    select option {
      background: #0b1024;
    }

    textarea {
      min-height: 130px;
      resize: vertical;
    }

    input:focus,
    select:focus,
    textarea:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 4px rgba(0, 229, 255, 0.12);
    }

    .form-message {
      display: none;
      padding: 14px;
      border-radius: 16px;
      background: rgba(34, 197, 94, 0.12);
      border: 1px solid rgba(34, 197, 94, 0.26);
      color: #bbf7d0;
      font-size: 14px;
    }

    .documentation-layout {
  display: grid;
  grid-template-columns: 320px 1fr;
  gap: 18px;
}

.documentation-sidebar,
.documentation-panel {
  border: 1px solid var(--border);
  background: var(--bg-card);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
}

.documentation-sidebar {
  padding: 22px;
  height: fit-content;
}

.documentation-sidebar h3 {
  font-size: 22px;
  margin-bottom: 12px;
}

.documentation-sidebar p {
  color: var(--muted);
  line-height: 1.6;
  font-size: 14px;
  margin-bottom: 18px;
}

.doc-stats {
  display: grid;
  gap: 12px;
  margin-bottom: 18px;
}

.doc-stat {
  padding: 14px;
  border-radius: 16px;
  background: rgba(255,255,255,0.06);
  border: 1px solid var(--border);
}

.doc-stat strong {
  display: block;
  font-size: 24px;
  margin-bottom: 4px;
}

.doc-stat span {
  color: var(--muted);
  font-size: 13px;
}

.documentation-panel {
  padding: 22px;
}

.docs-toolbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  margin-bottom: 16px;
}

.docs-toolbar h3 {
  font-size: 22px;
}

.doc-search {
  width: 100%;
  max-width: 300px;
  padding: 12px 14px;
  border-radius: 999px;
  border: 1px solid var(--border);
  background: rgba(255, 255, 255, 0.06);
  color: var(--text);
  outline: none;
}

.doc-filters {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-bottom: 16px;
}

.doc-filter-btn {
  padding: 9px 12px;
  border-radius: 999px;
  border: 1px solid var(--border);
  background: rgba(255,255,255,0.06);
  color: var(--muted);
  cursor: pointer;
  font-weight: 700;
  font-size: 13px;
}

.doc-filter-btn.active,
.doc-filter-btn:hover {
  color: #001018;
  background: var(--primary);
}

.docs-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 14px;
  max-height: 460px;
  overflow-y: auto;
  padding-right: 6px;
}

.docs-grid::-webkit-scrollbar {
  width: 8px;
}

.docs-grid::-webkit-scrollbar-thumb {
  background: rgba(0, 229, 255, 0.35);
  border-radius: 999px;
}

.doc-card {
  display: grid;
  gap: 14px;
  padding: 18px;
  border: 1px solid var(--border);
  background: rgba(255,255,255,0.045);
  border-radius: 18px;
  transition: 0.2s ease;
}

.doc-card:hover {
  transform: translateY(-3px);
  border-color: rgba(0, 229, 255, 0.45);
}

.doc-card-top {
  display: flex;
  align-items: flex-start;
  gap: 14px;
}

.doc-icon {
  width: 46px;
  height: 46px;
  min-width: 46px;
  border-radius: 16px;
  display: grid;
  place-items: center;
  background: var(--primary-soft);
  color: var(--primary);
  font-size: 22px;
}

.doc-card h4 {
  font-size: 17px;
  margin-bottom: 6px;
}

.doc-card p {
  color: var(--muted);
  line-height: 1.5;
  font-size: 14px;
}

.doc-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}

.doc-chip {
  padding: 6px 9px;
  border-radius: 999px;
  background: rgba(255,255,255,0.08);
  color: #cbd5e1;
  font-size: 12px;
  font-weight: 700;
}

.doc-actions {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
}

.btn-small {
  padding: 9px 13px;
  font-size: 13px;
}

.docs-empty {
  display: none;
  padding: 20px;
  border: 1px dashed var(--border);
  border-radius: 18px;
  color: var(--muted);
  text-align: center;
}

.document-modal {
  position: fixed;
  inset: 0;
  z-index: 100;
  display: none;
  align-items: center;
  justify-content: center;
  padding: 24px;
  background: rgba(0, 0, 0, 0.72);
  backdrop-filter: blur(12px);
}

.document-modal.show {
  display: flex;
}

.document-modal-card {
  width: min(1100px, 96vw);
  height: min(760px, 90vh);
  display: grid;
  grid-template-rows: auto 1fr auto;
  border-radius: 22px;
  overflow: hidden;
  border: 1px solid var(--border);
  background: #080d20;
  box-shadow: var(--shadow);
}

.document-modal-header,
.document-modal-footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  padding: 16px 18px;
  border-bottom: 1px solid var(--border);
}

.document-modal-footer {
  border-top: 1px solid var(--border);
  border-bottom: none;
}

.document-modal-header h3 {
  font-size: 18px;
}

.modal-close {
  width: 38px;
  height: 38px;
  border: 1px solid var(--border);
  border-radius: 12px;
  background: rgba(255,255,255,0.08);
  color: var(--text);
  font-size: 22px;
  cursor: pointer;
}

.modal-close:hover {
  background: rgba(239, 68, 68, 0.2);
  border-color: rgba(239, 68, 68, 0.45);
}

.doc-viewer {
  width: 100%;
  height: 100%;
  border: none;
  background: #111827;
}

.document-note {
  color: var(--muted);
  font-size: 13px;
}


header {
  background: rgba(255, 255, 255, 0.9);
  border-bottom: 1px solid var(--border);
}

.brand-icon {
  background: linear-gradient(135deg, var(--warning), var(--secondary));
  box-shadow: 0 10px 28px rgba(249, 115, 22, 0.22);
}
.brand-icon img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  display: block;
}
nav {
  color: #374151;
}

nav a:hover {
  color: var(--secondary);
}

.btn-primary {
  color: #111827;
  background: linear-gradient(135deg, var(--warning), var(--primary), var(--secondary));
  box-shadow: 0 14px 32px rgba(249, 115, 22, 0.22);
}

.btn-primary:hover {
  box-shadow: 0 20px 42px rgba(249, 115, 22, 0.32);
}

.btn-ghost {
  color: var(--text);
  background: #ffffff;
  border: 1px solid var(--border);
}

.btn-ghost:hover {
  background: #fff7ed;
}

.eyebrow {
  color: #92400e;
  background: rgba(250, 204, 21, 0.18);
  border: 1px solid rgba(245, 158, 11, 0.32);
}

.pulse {
  background: var(--primary);
  box-shadow: 0 0 0 8px rgba(245, 158, 11, 0.18);
}

.gradient-text {
  background: linear-gradient(135deg, #ca8a04, #f97316, #dc2626);
  -webkit-background-clip: text;
  color: transparent;
}

.hero p,
.section-title p,
.service-card p,
.timeline-card p,
.contact-card p,
.documentation-sidebar p,
.doc-card p,
.document-note {
  color: var(--muted);
}

.hero-panel {
  background: linear-gradient(180deg, #ffffff, #fff7ed);
  border: 1px solid var(--border);
}

.hero-panel::before {
  background: rgba(245, 158, 11, 0.18);
}

.terminal {
  background: #fffdf7;
  border: 1px solid rgba(245, 158, 11, 0.35);
}

.terminal-top {
  background: #fffbeb;
  border-bottom: 1px solid rgba(245, 158, 11, 0.28);
}

.terminal-body {
  color: #1f2937;
}

.terminal-body span {
  color: #ea580c;
}

.status-ok {
  color: #15803d !important;
}

.status-danger {
  color: #dc2626 !important;
}

.metric-card,
.service-card,
.dashboard-card,
.timeline-card,
.contact-card,
.documentation-sidebar,
.documentation-panel {
  background: #ffffff;
  border: 1px solid var(--border);
}

.metric-card .label,
.bar-row,
th,
.doc-stat span,
footer {
  color: var(--muted);
}

.metric-card .trend {
  color: #ea580c;
}

.service-card:hover,
.doc-card:hover {
  border-color: rgba(249, 115, 22, 0.55);
}

.service-icon,
.doc-icon {
  background: rgba(245, 158, 11, 0.14);
  color: #ea580c;
}

.search-box,
.doc-search,
input,
select,
textarea {
  background: #ffffff;
  color: var(--text);
  border: 1px solid rgba(245, 158, 11, 0.32);
}

.search-box::placeholder,
.doc-search::placeholder,
input::placeholder,
textarea::placeholder {
  color: #9ca3af;
}

select option {
  background: #ffffff;
  color: var(--text);
}

input:focus,
select:focus,
textarea:focus {
  border-color: var(--secondary);
  box-shadow: 0 0 0 4px rgba(249, 115, 22, 0.16);
}

.filter-btn,
.doc-filter-btn {
  color: #78350f;
  background: #fff7ed;
  border: 1px solid rgba(245, 158, 11, 0.35);
}

.filter-btn.active,
.filter-btn:hover,
.doc-filter-btn.active,
.doc-filter-btn:hover {
  color: #111827;
  background: linear-gradient(135deg, var(--warning), var(--primary));
}

td {
  color: #1f2937;
  border-bottom: 1px solid rgba(245, 158, 11, 0.18);
}

tr:hover td {
  background: #fff7ed;
}

.badge.critical {
  color: #991b1b;
  background: rgba(220, 38, 38, 0.1);
}

.badge.high {
  color: #9a3412;
  background: rgba(249, 115, 22, 0.14);
}

.badge.medium {
  color: #92400e;
  background: rgba(250, 204, 21, 0.22);
}

.badge.closed {
  color: #166534;
  background: rgba(22, 163, 74, 0.12);
}

.bar-track {
  background: #ffedd5;
}

.bar-fill {
  background: linear-gradient(90deg, var(--warning), var(--primary), var(--secondary));
}

.step-number {
  color: #111827;
  background: linear-gradient(135deg, var(--warning), var(--primary), var(--secondary));
}

.contact-list {
  color: #374151;
}

.form-message {
  background: rgba(250, 204, 21, 0.18);
  border: 1px solid rgba(245, 158, 11, 0.35);
  color: #78350f;
}

.doc-stat {
  background: #fff7ed;
  border: 1px solid rgba(245, 158, 11, 0.28);
}

.doc-card {
  background: #fffdf7;
  border: 1px solid rgba(245, 158, 11, 0.28);
}

.doc-chip {
  background: #ffedd5;
  color: #78350f;
}

.docs-grid::-webkit-scrollbar-thumb {
  background: rgba(249, 115, 22, 0.42);
}

.docs-empty {
  color: var(--muted);
  border: 1px dashed rgba(245, 158, 11, 0.45);
  background: #fff7ed;
}

.document-modal {
  background: rgba(17, 24, 39, 0.36);
}

.document-modal-card {
  background: #ffffff;
  border: 1px solid var(--border);
}

.document-modal-header,
.document-modal-footer {
  background: #fff7ed;
  border-color: rgba(245, 158, 11, 0.28);
}

.modal-close {
  background: #ffffff;
  color: var(--text);
  border: 1px solid rgba(245, 158, 11, 0.35);
}

.modal-close:hover {
  background: rgba(220, 38, 38, 0.08);
  border-color: rgba(220, 38, 38, 0.25);
}

.doc-viewer {
  background: #ffffff;
}

footer {
  border-top: 1px solid var(--border);
  background: #ffffff;
}
    footer {
      padding: 28px 0;
      border-top: 1px solid var(--border);
      color: var(--muted);
      text-align: center;
      font-size: 14px;
    }

    @media (max-width: 980px) {
        .documentation-layout {
  grid-template-columns: 1fr;
}

.docs-grid {
  grid-template-columns: 1fr;
}
      nav {
        display: none;
      }

      .hero-grid,
      .dashboard-grid,
      .contact-grid {
        grid-template-columns: 1fr;
      }

      .metrics,
      .services-grid,
      .timeline {
        grid-template-columns: repeat(2, 1fr);
      }

      .section-title {
        align-items: start;
        flex-direction: column;
      }
    }

    @media (max-width: 620px) {

        .documentation-layout {
  grid-template-columns: 1fr;
}

.docs-grid {
  grid-template-columns: 1fr;
}
      .metrics,
      .services-grid,
      .timeline,
      .form-row {
        grid-template-columns: 1fr;
      }

      h1 {
        letter-spacing: -1.6px;
      }

      .dashboard-header {
        align-items: start;
        flex-direction: column;
      }

      .search-box {
        max-width: 100%;
      }

      table {
        min-width: 720px;
      }

      .table-wrapper {
        overflow-x: auto;
      }
    }

    /* ===== Corrección final de contraste para tema claro ===== */

body {
  background:
    radial-gradient(circle at top left, rgba(250, 204, 21, 0.12), transparent 28%),
    radial-gradient(circle at top right, rgba(249, 115, 22, 0.10), transparent 28%),
    linear-gradient(180deg, #ffffff 0%, #fffaf0 45%, #ffffff 100%) !important;
  color: #111827 !important;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  color: #111827 !important;
}

p,
span,
div,
td,
th,
label,
small {
  color: inherit;
}

.hero p,
.section-title p,
.service-card p,
.timeline-card p,
.contact-card p,
.documentation-sidebar p,
.doc-card p,
.document-note,
.metric-card .label,
.doc-stat span,
.bar-row {
  color: #374151 !important;
}

.metric-card .value {
  color: #111827 !important;
  opacity: 1 !important;
}

.metric-card .trend {
  color: #ea580c !important;
  font-weight: 700;
}

.brand {
  color: #111827 !important;
}

.brand small {
  color: #64748b !important;
}

nav {
  color: #1f2937 !important;
}

nav a {
  color: #1f2937 !important;
  font-weight: 700;
}

nav a:hover {
  color: #ea580c !important;
}

.gradient-text {
  background: linear-gradient(135deg, #ca8a04, #f97316, #dc2626) !important;
  -webkit-background-clip: text !important;
  background-clip: text !important;
  color: transparent !important;
}

.metric-card,
.service-card,
.dashboard-card,
.timeline-card,
.contact-card,
.documentation-sidebar,
.documentation-panel,
.doc-card {
  background: rgba(255, 255, 255, 0.96) !important;
  border: 1px solid rgba(245, 158, 11, 0.28) !important;
  box-shadow: 0 18px 45px rgba(120, 53, 15, 0.12) !important;
}

.service-card h3,
.timeline-card h3,
.contact-card h3,
.documentation-sidebar h3,
.documentation-panel h3,
.doc-card h4,
.dashboard-header h3 {
  color: #111827 !important;
  opacity: 1 !important;
}

.service-card p,
.timeline-card p,
.contact-card p,
.doc-card p {
  color: #475569 !important;
  opacity: 1 !important;
}

.section-title h2 {
  color: #111827 !important;
  opacity: 1 !important;
}

.section-title p {
  color: #475569 !important;
}

.eyebrow {
  color: #92400e !important;
  background: rgba(250, 204, 21, 0.22) !important;
  border: 1px solid rgba(245, 158, 11, 0.36) !important;
  font-weight: 700;
}

.btn-primary {
  color: #111827 !important;
  background: linear-gradient(135deg, #facc15, #f59e0b, #f97316) !important;
}

.btn-ghost {
  color: #111827 !important;
  background: #ffffff !important;
  border: 1px solid rgba(245, 158, 11, 0.35) !important;
}

.service-icon,
.doc-icon {
  background: #fff7ed !important;
  color: #ea580c !important;
}

.terminal {
  background: #fffdf7 !important;
  border: 1px solid rgba(245, 158, 11, 0.35) !important;
}

.terminal-body,
.terminal-body div {
  color: #1f2937 !important;
}

.terminal-body span {
  color: #ea580c !important;
}

.status-ok {
  color: #15803d !important;
}

.status-danger {
  color: #dc2626 !important;
}

input,
select,
textarea,
.search-box,
.doc-search {
  background: #ffffff !important;
  color: #111827 !important;
  border: 1px solid rgba(245, 158, 11, 0.38) !important;
}

input::placeholder,
textarea::placeholder,
.search-box::placeholder,
.doc-search::placeholder {
  color: #6b7280 !important;
}

.filter-btn,
.doc-filter-btn {
  color: #78350f !important;
  background: #fff7ed !important;
  border: 1px solid rgba(245, 158, 11, 0.38) !important;
}

.filter-btn.active,
.filter-btn:hover,
.doc-filter-btn.active,
.doc-filter-btn:hover {
  color: #111827 !important;
  background: linear-gradient(135deg, #facc15, #f59e0b) !important;
}

table,
thead,
tbody,
tr,
td,
th {
  color: #111827 !important;
}

th {
  color: #475569 !important;
}

td {
  color: #1f2937 !important;
}

tr:hover td {
  background: #fff7ed !important;
}

.doc-chip {
  background: #ffedd5 !important;
  color: #78350f !important;
}

.doc-stat {
  background: #fff7ed !important;
}

.doc-stat strong {
  color: #111827 !important;
}

.contact-list,
.contact-list div {
  color: #374151 !important;
}

footer,
footer div {
  color: #64748b !important;
  background: #ffffff !important;
}

.creator-code {
  margin-top: 14px;
  padding-top: 14px;
  border-top: 1px dashed rgba(249, 115, 22, 0.35);
}

.terminal-comment {
  color: #9a3412 !important;
  font-style: italic;
}

.terminal-keyword {
  color: #ea580c !important;
  font-weight: 800;
}

.terminal-var {
  color: #ca8a04 !important;
  font-weight: 800;
}

.terminal-name {
  color: #1f2937 !important;
  padding-left: 22px;
}

.terminal-muted {
  color: #64748b !important;
}
  </style>
</head>

<body>
  <header>
    <div class="container navbar">
      <a href="#" class="brand">
 <div class="brand-icon">
  <img src="assets/logo.png" alt="Logo de <?php echo $appName; ?>">
</div>
  <div>
    <?php echo $appName; ?>
    <small>Servicio de Monitoreo y Respuesta</small>
  </div>
</a>

    <nav>
    <a href="#servicios">Acerca de nosotros</a>
    <a href="#documentacion">Documentación</a>
    <a href="#dashboard">Centro de respuesta</a>
    <a href="#proceso">Proceso</a>
    <a href="#contacto">Contacto</a>
    </nav>

      <a class="btn btn-primary" href="#contacto">Solicitar evaluación</a>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="container hero-grid">
        <div>
          <div class="eyebrow">
            <span class="pulse"></span>
            Monitoreo activo 24/7
          </div>

          <h1>
            Erradicamos amenazas antes de que tu empresa se convierta en otro caso de estudio.
            <span class="gradient-text">Qué detalle.</span>
          </h1>

          <p>
            <?php echo $companyTagline; ?>. Diseñado para empresas que necesitan detectar,
            contener, analizar y eliminar amenazas digitales con trazabilidad, evidencia y respuesta ejecutiva.
          </p>

          <div class="hero-actions">
            <a href="#dashboard" class="btn btn-primary">Ver simulación</a>
            <a href="#servicios" class="btn btn-ghost">Explorar servicios</a>
          </div>
        </div>

        <div class="hero-panel">
          <div class="terminal">
            <div class="terminal-top">
              <span class="dot red"></span>
              <span class="dot yellow"></span>
              <span class="dot green"></span>
            </div>

                <div class="terminal-body">
      <div><span>$</span> iniciando respuesta_incidente --cliente=enterprise</div>
      <div><span>[01]</span> Analizando indicadores de compromiso...</div>
      <div><span>[02]</span> Bloqueando C2 y dominios maliciosos...</div>
      <div><span class="status-danger">[ALERTA]</span> Movimiento lateral detectado</div>
      <div><span>[03]</span> Ejecutando erradicación controlada...</div>
      <div><span class="status-ok">[OK]</span> Incidente contenido y evidencias generadas</div>

      <div class="creator-code">
        <div class="terminal-comment">// Proyecto final desarrollado por:</div>
        <div>
          <span class="terminal-keyword">const</span>
          <span class="terminal-var">creadores</span>
          <span class="terminal-muted">= [</span>
        </div>
        <div class="terminal-name">"Huerta Vazquez Ilda Mariel",</div>
        <div class="terminal-name">"Pérez Hernández Edgar Iván",</div>
        <div class="terminal-name">"Velasco Jiménez Luis Antonio"</div>
        <div class="terminal-muted">];</div>
      </div>
    </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container metrics">
        <article class="metric-card">
          <div class="label">Tiempo medio de contención</div>
          <div class="value">18 min</div>
          <div class="trend">↓ 42% vs promedio interno</div>
        </article>

        <article class="metric-card">
          <div class="label">Incidentes erradicados</div>
          <div class="value">1,284</div>
          <div class="trend">+128 este trimestre</div>
        </article>

        <article class="metric-card">
          <div class="label">Disponibilidad del SOC</div>
          <div class="value">99.9%</div>
          <div class="trend">Monitoreo continuo</div>
        </article>

        <article class="metric-card">
          <div class="label">Casos críticos activos</div>
          <div class="value">03</div>
          <div class="trend">Priorizados por riesgo</div>
        </article>
      </div>
    </section>

    <section id="servicios">
      <div class="container">
        <div class="section-title">
          <div>
            <h2>Acerca de nosotros</h2>
          </div>
          <p>
          Servicios EDR y MDR para detectar, contener y responder a incidentes de ciberseguridad, ayudando a las empresas a proteger su información y continuidad operativa.

          </p>
        </div>

        <div class="services-grid">
          <article class="service-card">
            <div class="service-icon">🔍</div>
            <h3>Introducción</h3>
            <p>
              AmbarShield es una empresa especializada en consultoría y servicios gestionados de ciberseguridad, enfocada en soluciones EDR y MDR para fortalecer la protección digital de las organizaciones.
Su objetivo es reducir riesgos, detectar amenazas y responder oportunamente a incidentes mediante monitoreo continuo, inteligencia de amenazas y procesos alineados con mejores prácticas.

            </p>
          </article>

          <article class="service-card">
            <div class="service-icon">🎯</div>
            <h3>Objetivo</h3>
            <p>
              Brindar servicios especializados de detección, monitoreo y respuesta ante amenazas cibernéticas
mediante la implementación de soluciones EDR y MDR, con el propósito de proteger los activos
tecnológicos de las organizaciones, reducir los tiempos de detección y contención de incidentes, y
garantizar la continuidad de sus operaciones.
            </p>
          </article>

          <article class="service-card">
            <div class="service-icon">🧬</div>
            <h3>Descripción de la empresa</h3>
            <p>
              AmbarShield es una empresa de consultoría y servicios gestionados de ciberseguridad dedicada a la
protección de infraestructuras tecnológicas empresariales. Su principal oferta consiste en la
implementación y operación de servicios de monitoreo de seguridad 24/7, análisis de eventos, gestión
de incidentes y respuesta temprana ante amenazas avanzadas.
La empresa cuenta con personal especializado en arquitectura de seguridad, operaciones MDR y
gestión de proyectos, permitiendo ofrecer soluciones adaptadas a las necesidades de cada
organización.
            </p>
          </article>

          <article class="service-card">
            <div class="service-icon">📈</div>
            <h3>Misión</h3>
            <p>
             Proteger los activos digitales de nuestros clientes mediante servicios innovadores de detección,
monitoreo y respuesta ante amenazas cibernéticas, ofreciendo atención especializada, tecnología de
vanguardia y acompañamiento estratégico que contribuya a la continuidad y seguridad de sus
operaciones.
            </p>
          </article>

          <article class="service-card">
            <div class="service-icon">📊</div>
            <h3>Visión</h3>
            <p>
              Ser una empresa líder en servicios gestionados de ciberseguridad a nivel nacional, reconocida por la
excelencia de sus soluciones, la confianza de sus clientes y su capacidad para anticipar, detectar y
responder eficazmente a los desafíos del entorno digital.
            </p>
          </article>

          <article class="service-card">
            <div class="service-icon">👮🏻‍♂️</div>
            <h3>Valores</h3>
            <p>
             • Compromiso <br>
• Innovación<br>
• Excelencia<br>
• Trabajo en equipo<br>
• Orientación al cliente<br>
• Mejora continua
            </p>
          </article>
        </div>
      </div>
    </section>
<section id="documentacion">
  <div class="container">
    <div class="section-title">
      <div>
        <h2>Documentación</h2>
      </div>
      <p>
        Consulta procedimientos, reportes, checklists y políticas.
      </p>
    </div>

    <div class="documentation-layout">
      <aside class="documentation-sidebar">
        <h3>Biblioteca MDR</h3>
        <p>
          Repositorio documental para apoyar la gestión, atención y cierre de incidentes de ciberseguridad.
        </p>

        <div class="doc-stats">
          <div class="doc-stat">
            <strong><?php echo count($documents); ?></strong>
            <span>Documentos disponibles</span>
          </div>

          <div class="doc-stat">
            <strong>6</strong>
            <span>Categorías operativas</span>
          </div>

          <div class="doc-stat">
            <strong>PDF</strong>
            <span>Formato recomendado para visualizar en navegador</span>
          </div>
        </div>
      </aside>

      <article class="documentation-panel">
        <div class="docs-toolbar">
          <h3>Documentos disponibles</h3>
          <input id="docSearch" class="doc-search" type="text" placeholder="Buscar documento..." />
        </div>

        <div class="doc-filters">
          <button class="doc-filter-btn active" data-doc-filter="all">Todos</button>
          <button class="doc-filter-btn" data-doc-filter="procedimientos">Procedimientos</button>
          <button class="doc-filter-btn" data-doc-filter="reportes">Reportes</button>
          <button class="doc-filter-btn" data-doc-filter="evidencias">Evidencias</button>
          <button class="doc-filter-btn" data-doc-filter="guias">Guías</button>
          <button class="doc-filter-btn" data-doc-filter="politicas">Políticas</button>
        </div>

        <div class="docs-grid" id="docsGrid">
          <?php foreach ($documents as $document): ?>
            <article
              class="doc-card"
              data-category="<?php echo htmlspecialchars($document["category"]); ?>"
              data-title="<?php echo strtolower(htmlspecialchars($document["title"])); ?>"
            >
              <div class="doc-card-top">
                <div class="doc-icon">📄</div>

                <div>
                  <h4><?php echo htmlspecialchars($document["title"]); ?></h4>
                  <p><?php echo htmlspecialchars($document["summary"]); ?></p>
                </div>
              </div>

              <div class="doc-meta">
                <span class="doc-chip"><?php echo strtoupper(htmlspecialchars($document["type"])); ?></span>
                <span class="doc-chip"><?php echo htmlspecialchars($document["size"]); ?></span>
                <span class="doc-chip"><?php echo htmlspecialchars($document["date"]); ?></span>
                <span class="doc-chip"><?php echo ucfirst(htmlspecialchars($document["category"])); ?></span>
              </div>

              <div class="doc-actions">
                <button
                  class="btn btn-primary btn-small"
                  type="button"
                  onclick="openDocument('<?php echo htmlspecialchars($document["file"], ENT_QUOTES); ?>', '<?php echo htmlspecialchars($document["title"], ENT_QUOTES); ?>')"
                >
                  Visualizar
                </button>

                <a
                  class="btn btn-ghost btn-small"
                  href="<?php echo htmlspecialchars($document["file"]); ?>"
                  target="_blank"
                >
                  Abrir aparte
                </a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>

        <div id="docsEmpty" class="docs-empty">
          No se encontraron documentos con ese filtro. Dramático, pero solucionable.
        </div>
      </article>
    </div>
  </div>
</section>
    <section id="dashboard">
      <div class="container">
        <div class="section-title">
          <div>
            <h2>Centro de respuesta</h2>
          </div>
          <p>
            Vista simulada de incidentes activos, severidad, estado y responsables. Por ahora son datos
            falsos en JavaScript; después esto saldrá de la base de datos.
          </p>
        </div>

        <div class="dashboard-grid">
          <article class="dashboard-card">
            <div class="dashboard-header">
              <h3>Incidentes recientes</h3>
              <input id="searchInput" class="search-box" type="text" placeholder="Buscar incidente..." />
            </div>

            <div class="filters">
              <button class="filter-btn active" data-filter="all">Todos</button>
              <button class="filter-btn" data-filter="critical">Críticos</button>
              <button class="filter-btn" data-filter="high">Altos</button>
              <button class="filter-btn" data-filter="medium">Medios</button>
              <button class="filter-btn" data-filter="closed">Cerrados</button>
            </div>

            <div class="table-wrapper">
              <table>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Incidente</th>
                    <th>Activo afectado</th>
                    <th>Severidad</th>
                    <th>Estado</th>
                    <th>Responsable</th>
                  </tr>
                </thead>
                <tbody id="incidentTable"></tbody>
              </table>
            </div>
          </article>

          <article class="dashboard-card">
            <div class="dashboard-header">
              <h3>Amenazas contenidas</h3>
            </div>

            <div class="chart">
              <div class="bar-row">
                <span>Phishing</span>
                <div class="bar-track">
                  <div class="bar-fill" style="width: 82%;"></div>
                </div>
                <strong>82%</strong>
              </div>

              <div class="bar-row">
                <span>Malware</span>
                <div class="bar-track">
                  <div class="bar-fill" style="width: 68%;"></div>
                </div>
                <strong>68%</strong>
              </div>

              <div class="bar-row">
                <span>Ransomware</span>
                <div class="bar-track">
                  <div class="bar-fill" style="width: 54%;"></div>
                </div>
                <strong>54%</strong>
              </div>

              <div class="bar-row">
                <span>Accesos</span>
                <div class="bar-track">
                  <div class="bar-fill" style="width: 73%;"></div>
                </div>
                <strong>73%</strong>
              </div>

              <div class="bar-row">
                <span>Exfiltración</span>
                <div class="bar-track">
                  <div class="bar-fill" style="width: 39%;"></div>
                </div>
                <strong>39%</strong>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="proceso">
      <div class="container">
        <div class="section-title">
          <div>
            <h2>Proceso de respuesta</h2>
          </div>
          <p>
            Flujo simple para visualizar cómo trabajaría la empresa desde la alerta inicial hasta la recuperación.
          </p>
        </div>

        <div class="timeline">
          <article class="timeline-card">
            <div class="step-number">1</div>
            <h3>Identificación</h3>
            <p>
              Se valida la alerta, se clasifican los activos afectados y se define la severidad inicial.
            </p>
          </article>

          <article class="timeline-card">
            <div class="step-number">2</div>
            <h3>Contención</h3>
            <p>
              Se limitan accesos, se aíslan equipos y se bloquean comunicaciones maliciosas.
            </p>
          </article>

          <article class="timeline-card">
            <div class="step-number">3</div>
            <h3>Erradicación</h3>
            <p>
              Se elimina la amenaza, persistencia, cuentas comprometidas y configuraciones alteradas.
            </p>
          </article>

          <article class="timeline-card">
            <div class="step-number">4</div>
            <h3>Recuperación</h3>
            <p>
              Se restauran servicios, se monitorea reincidencia y se entrega el reporte final.
            </p>
          </article>
        </div>
      </div>
    </section>


    <section id="contacto">
      <div class="container">
        <div class="section-title">
          <div>
            <h2>Solicitar evaluación</h2>
          </div>
          <p>
            Formulario visual de contacto. Todavía no envía nada a base de datos, porque por ahora fingimos
            orden en el universo.
          </p>
        </div>

        <div class="contact-grid">
          <article class="contact-card">
            <h3>Respuesta ante incidentes para empresas</h3>
            <p>
              Ideal para organizaciones que necesitan atención especializada ante malware, ransomware,
              phishing, fuga de información o accesos no autorizados.
            </p>

            <div class="contact-list">
              <div>📍 Cobertura remota y presencial</div>
              <div>🕒 Atención 24/7 para incidentes críticos</div>
              <div>📄 Reportes técnicos y ejecutivos</div>
              <div>🧾 Evidencia para auditoría y cumplimiento</div>
            </div>
          </article>

          <article class="contact-card">
            <form id="contactForm" class="form-grid">
              <div class="form-message" id="formMessage">
                Solicitud simulada registrada correctamente. Cuando conectemos PHP y base de datos, esto se guardará de verdad.
              </div>

              <div class="form-row">
                <input type="text" name="name" placeholder="Nombre completo" required />
                <input type="email" name="email" placeholder="Correo empresarial" required />
              </div>

              <div class="form-row">
                <input type="text" name="company" placeholder="Empresa" required />
                <select name="incident_type" required>
                  <option value="">Tipo de incidente</option>
                  <option value="phishing">Phishing</option>
                  <option value="malware">Malware</option>
                  <option value="ransomware">Ransomware</option>
                  <option value="access">Acceso no autorizado</option>
                  <option value="data">Fuga de información</option>
                </select>
              </div>

              <select name="priority" required>
                <option value="">Nivel de urgencia</option>
                <option value="medium">Medio</option>
                <option value="high">Alto</option>
                <option value="critical">Crítico</option>
              </select>

              <textarea name="description" placeholder="Describe brevemente el incidente..." required></textarea>

              <button class="btn btn-primary" type="submit">Enviar solicitud</button>
            </form>
          </article>
        </div>
      </div>
    </section>
  </main>
            <div class="document-modal" id="documentModal">
  <div class="document-modal-card">
    <div class="document-modal-header">
      <h3 id="documentModalTitle">Documento</h3>
      <button class="modal-close" type="button" onclick="closeDocumentModal()">×</button>
    </div>

    <iframe id="docViewer" class="doc-viewer" src="" title="Visor de documento"></iframe>

    <div class="document-modal-footer">
      <span class="document-note">
        Si el documento no carga, revisa que exista dentro de la carpeta docs.
      </span>

      <a id="documentDownloadLink" class="btn btn-primary btn-small" href="#" target="_blank">
        Abrir documento
      </a>
    </div>
  </div>
</div>
  <footer>
    <div class="container">
      © <?php echo date("Y"); ?> <?php echo $appName; ?>. 
      <p>
        7CV4 - Gobierno de TI | IPN - ESCOM
          </p>
    </div>
  </footer>

  <script>
    const incidents = [
      {
        id: "IR-1024",
        title: "Phishing con robo de credenciales",
        asset: "Correo corporativo",
        severity: "critical",
        status: "En contención",
        owner: "SOC Nivel 2"
      },
      {
        id: "IR-1025",
        title: "Malware en endpoint financiero",
        asset: "Laptop FIN-042",
        severity: "high",
        status: "Erradicando",
        owner: "DFIR"
      },
      {
        id: "IR-1026",
        title: "Intento de acceso no autorizado",
        asset: "VPN empresarial",
        severity: "medium",
        status: "Investigando",
        owner: "IAM"
      },
      {
        id: "IR-1027",
        title: "Comunicación a dominio C2",
        asset: "Servidor APP-03",
        severity: "critical",
        status: "En contención",
        owner: "Blue Team"
      },
      {
        id: "IR-1028",
        title: "Alerta por exfiltración de datos",
        asset: "Repositorio documental",
        severity: "high",
        status: "Análisis forense",
        owner: "Forense Digital"
      },
      {
        id: "IR-1029",
        title: "Persistencia eliminada",
        asset: "Servidor WEB-01",
        severity: "closed",
        status: "Cerrado",
        owner: "Respuesta IR"
      }
    ];

    const table = document.getElementById("incidentTable");
    const searchInput = document.getElementById("searchInput");
    const filterButtons = document.querySelectorAll(".filter-btn");

    let currentFilter = "all";

    const severityLabels = {
      critical: "Crítico",
      high: "Alto",
      medium: "Medio",
      closed: "Cerrado"
    };

    function renderIncidents() {
      const search = searchInput.value.toLowerCase();

      const filtered = incidents.filter((incident) => {
        const matchesFilter = currentFilter === "all" || incident.severity === currentFilter;

        const matchesSearch =
          incident.id.toLowerCase().includes(search) ||
          incident.title.toLowerCase().includes(search) ||
          incident.asset.toLowerCase().includes(search) ||
          incident.owner.toLowerCase().includes(search);

        return matchesFilter && matchesSearch;
      });

      table.innerHTML = filtered.map((incident) => `
        <tr>
          <td>${incident.id}</td>
          <td>${incident.title}</td>
          <td>${incident.asset}</td>
          <td>
            <span class="badge ${incident.severity}">
              ● ${severityLabels[incident.severity]}
            </span>
          </td>
          <td>${incident.status}</td>
          <td>${incident.owner}</td>
        </tr>
      `).join("");
    }

    filterButtons.forEach((button) => {
      button.addEventListener("click", () => {
        filterButtons.forEach((btn) => btn.classList.remove("active"));
        button.classList.add("active");
        currentFilter = button.dataset.filter;
        renderIncidents();
      });
    });

    searchInput.addEventListener("input", renderIncidents);

    document.getElementById("contactForm").addEventListener("submit", function(event) {
      event.preventDefault();

      const message = document.getElementById("formMessage");
      message.style.display = "block";

      this.reset();

      setTimeout(() => {
        message.style.display = "none";
      }, 4500);
    });
    const docSearch = document.getElementById("docSearch");
const docCards = document.querySelectorAll(".doc-card");
const docFilterButtons = document.querySelectorAll(".doc-filter-btn");
const docsEmpty = document.getElementById("docsEmpty");

let currentDocFilter = "all";

function filterDocuments() {
  const search = docSearch.value.toLowerCase();
  let visibleDocuments = 0;

  docCards.forEach((card) => {
    const category = card.dataset.category;
    const content = card.textContent.toLowerCase();

    const matchesFilter = currentDocFilter === "all" || category === currentDocFilter;
    const matchesSearch = content.includes(search);

    if (matchesFilter && matchesSearch) {
      card.style.display = "grid";
      visibleDocuments++;
    } else {
      card.style.display = "none";
    }
  });

  docsEmpty.style.display = visibleDocuments === 0 ? "block" : "none";
}

docFilterButtons.forEach((button) => {
  button.addEventListener("click", () => {
    docFilterButtons.forEach((btn) => btn.classList.remove("active"));
    button.classList.add("active");

    currentDocFilter = button.dataset.docFilter;
    filterDocuments();
  });
});

docSearch.addEventListener("input", filterDocuments);

function openDocument(file, title) {
  const modal = document.getElementById("documentModal");
  const viewer = document.getElementById("docViewer");
  const modalTitle = document.getElementById("documentModalTitle");
  const downloadLink = document.getElementById("documentDownloadLink");

  modalTitle.textContent = title;
  viewer.src = file;
  downloadLink.href = file;

  modal.classList.add("show");
  document.body.style.overflow = "hidden";
}

function closeDocumentModal() {
  const modal = document.getElementById("documentModal");
  const viewer = document.getElementById("docViewer");

  modal.classList.remove("show");
  viewer.src = "";
  document.body.style.overflow = "";
}

document.getElementById("documentModal").addEventListener("click", function(event) {
  if (event.target === this) {
    closeDocumentModal();
  }
});

document.addEventListener("keydown", function(event) {
  if (event.key === "Escape") {
    closeDocumentModal();
  }
});
    renderIncidents();
  </script>
</body>
</html>