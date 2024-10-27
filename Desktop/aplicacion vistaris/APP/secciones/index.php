<div class="main-container p-5">
    <div class="container text-center">
        <h1 class="display-3">Bienvenido a Vistaris</h1>
        <hr class="my-4">
       
        <!-- Cerrar Sesión Button with Icon -->
        <div class="text-end mb-4">
            <a href="cerrar_sesion.php" class="btn-logout">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-power me-2" viewBox="0 0 16 16">
                    <path d="M7.5 1v7h1V1z"/>
                    <path d="M3 8.812a5 5 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812"/>
                </svg>
                Cerrar Sesión
            </a>
        </div>

        <!-- Icon Grid Section -->
        <div class="icon-grid">
            <div class="icon-item">
                <a href="vista_clientes.php" class="icon-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="#000000" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                    </svg>
                    <span>Clientes</span>
                </a>
            </div>
            <div class="icon-item">
                <a href="vista_inadaptaciones.php" class="icon-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="#000000" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                    </svg>
                    <span>Inadaptaciones</span>
                </a>
            </div>
            <div class="icon-item">
                <a href="vista_empleados.php" class="icon-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="#000000" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                        <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5z"/>
                    </svg>
                    <span>Empleados</span>
                </a>
            </div>
            <div class="icon-item">
                <a href="vista_inventario.php" class="icon-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="#000000" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                        <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                    </svg>
                    <span>Inventario</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Enhanced CSS for aesthetic styling -->
<style>
    body {
        background-color: #fbf6ef;
        font-family: 'Arial', sans-serif;
        color: #4a3f35;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .main-container {
        text-align: center;
        max-width: 800px;
        margin: auto;
    }
    .main-container h1 {
        font-size: 2.8rem;
        color: #4a3f35;
        font-weight: 600;
        margin-top: 20px;
    }
    .main-container hr {
        border-top: 1px solid #d3b49c;
        width: 60%;
        margin: 25px auto;
    }
    .btn-logout {
        background-color: #b88a6d;
        color: #fff;
        padding: 16px 32px;
        border-radius: 30px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        transition: background-color 0.3s;
    }
    .btn-logout:hover {
        background-color: #a4785d;
    }
    .icon-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    .icon-item {
        background: #f7ede3;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        text-align: center;
        color: #4a3f35;
    }
    .icon-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }
    .icon-item svg {
        width: 140px;
        height: 140px;
        fill: #000000;
        margin-bottom: 15px;
    }
    .icon-item span {
        font-size: 1.4rem;
        color: #4a3f35;
        font-weight: 600;
    }
</style>
