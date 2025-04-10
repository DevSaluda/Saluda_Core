<header class="app-header">
    <div class="container">
        <div class="logo">
            <i class="fas fa-heartbeat"></i>
            <span>SALUDA</span>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="{{ route('dashboard') }}">Inicio</a></li>
                <li><a href="{{ route('citas') }}">Citas</a></li>
                <li><a href="{{ route('servicios') }}">Servicios</a></li>
                <li><a href="{{ route('medicos') }}">Médicos</a></li>
            </ul>
        </nav>
    </div>
</header>

<style>
    .app-header {
        background-color: var(--white);
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        padding: 1rem 0;
    }
    
    .app-header .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }
    
    .logo {
        display: flex;
        align-items: center;
        font-weight: 700;
        font-size: 1.5rem;
    }
    
    .logo i {
        color: var(--primary-color);
        margin-right: 0.5rem;
    }
    
    .main-nav ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .main-nav li {
        margin-left: 2rem;
    }
    
    .main-nav a {
        color: var(--text-color);
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s;
    }
    
    .main-nav a:hover {
        color: var(--primary-color);
    }
</style> 