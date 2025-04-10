@extends('layouts.app')

@section('content')
<div class="container">
    <div class="module-header">
        <h1>Médicos</h1>
        <p>Gestión del personal médico del centro</p>
    </div>
    
    <div class="module-content">
        <div class="card">
            <div class="card-body">
                <p>El contenido de la gestión de médicos se implementará aquí.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }
    
    .module-header {
        margin-bottom: 2rem;
    }
    
    .module-header h1 {
        font-size: 2rem;
        color: var(--text-color);
        margin-bottom: 0.5rem;
    }
    
    .module-header p {
        color: var(--text-color);
        opacity: 0.7;
    }
    
    .card {
        background-color: var(--white);
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }
    
    .card-body {
        padding: 2rem;
    }
</style>
@endsection 