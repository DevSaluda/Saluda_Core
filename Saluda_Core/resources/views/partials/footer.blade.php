<footer class="app-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <i class="fas fa-heartbeat"></i>
                <span>SALUDA</span>
            </div>
            <div class="footer-copyright">
                &copy; {{ date('Y') }} Centro Médico Familiar SALUDA. Todos los derechos reservados.
            </div>
        </div>
    </div>
</footer>

<style>
    .app-footer {
        background-color: var(--primary-color);
        color: var(--white);
        padding: 2rem 0;
        margin-top: 3rem;
    }
    
    .app-footer .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }
    
    .footer-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .footer-logo {
        display: flex;
        align-items: center;
        font-weight: 700;
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }
    
    .footer-logo i {
        margin-right: 0.5rem;
    }
    
    .footer-copyright {
        font-size: 0.9rem;
        opacity: 0.9;
    }
</style> 