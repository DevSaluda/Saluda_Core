@extends('layouts.app')

@section('styles')
<style>
    .login-container {
        min-height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2rem;
    }

    .login-card {
        background-color: var(--white);
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 900px;
        padding: 3rem;
        text-align: center;
    }

    .logo-container {
        margin-bottom: 2.5rem;
    }

    .logo-text {
        margin: 1rem 0 0.5rem;
        color: var(--text-color);
        font-size: 2.5rem;
    }

    .logo-subtext {
        color: var(--text-color);
        opacity: 0.7;
        font-size: 1.2rem;
        margin: 0;
    }

    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .hover-card {
        transition: all 0.3s ease-in-out;
        cursor: pointer;
        border-radius: 15px;
        overflow: hidden;
        background: var(--white);
        padding: 2rem;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        border: 1px solid rgba(0,0,0,0.05);
    }

    .hover-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .hover-card:hover .icon-container {
        transform: scale(1.1);
    }

    .icon-container {
        transition: transform 0.3s ease-in-out;
        display: inline-block;
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 1rem;
    }

    .card-title {
        font-weight: 600;
        color: var(--text-color);
        margin-top: 15px;
        font-size: 1rem;
    }

    .loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        z-index: 9999;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .loading-spinner {
        border: 4px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        border-top: 4px solid var(--white);
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
    }

    .loading-text {
        color: var(--white);
        font-size: 1.2rem;
        font-weight: 300;
        letter-spacing: 1px;
        margin-top: 1rem;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
@endsection

@section('content')
<div class="login-container">
    <div class="login-card">
        <div class="logo-container">
            <i class="fas fa-heartbeat fa-4x" style="color: var(--primary-color);"></i>
            <h1 class="logo-text">SALUDA</h1>
            <p class="logo-subtext">Centro Médico Familiar</p>
        </div>

        <div class="card-grid">
            <div class="hover-card" onclick="window.location.href='{{ route('posv') }}'">
                <div class="icon-container">
                    <i class="fas fa-cash-register"></i>
                </div>
                <h3 class="card-title">PUNTO DE VENTA</h3>
            </div>

            <div class="hover-card" onclick="window.location.href='{{ route('citas') }}'">
                <div class="icon-container">
                    <i class="fas fa-calendar-day"></i>
                </div>
                <h3 class="card-title">CONTROL DE CITAS</h3>
            </div>

            <div class="hover-card" onclick="window.location.href='{{ route('servicios') }}'">
                <div class="icon-container">
                    <i class="fas fa-hand-holding-medical"></i>
                </div>
                <h3 class="card-title">SERVICIOS ESPECIALIZADOS</h3>
            </div>

            <div class="hover-card" onclick="window.location.href='{{ route('medicos') }}'">
                <div class="icon-container">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3 class="card-title">MÉDICOS</h3>
            </div>
        </div>
    </div>
</div>
@endsection 