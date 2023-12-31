@extends('layouts.layout')

@section('sidebar')
<style>
    .sidebar {
        height: 100vh;
        position: sticky;
        top: 0;
    }
</style>
<div class="col-lg-2 col-md-3 sidebar">
    <img src="{{ asset('images/logoSmartPantry2.jpg') }}" alt="Logo da SmartPantry">    
    <h5>Olá, {{ Auth::user()->name }}</h5>        
    <a href="{{ route('account') }}"><i class="fas fa-user"></i><span class="menu-text">  Conta </span></a>
    <hr />
    <a href="{{ route('home') }}"><i class="fas fa-home"></i><span class="menu-text">  Home </span></a>
    <a href="{{ route('supermarket_lists.index') }}"><i class="fas fa-tasks"></i><span class="menu-text">  Listas</span></a>
    <a href="{{ route('products.index') }}"><i class="fas fa-box"></i><span class="menu-text">  Produtos</span></a>
    <a href="{{ route('larders.index') }}"><i class="fas fa-utensils"></i><span class="menu-text">   Despensa</span></a>
    <a href="{{ route('categories.index') }}"><i class="fas fa-tags"></i><span class="menu-text">  Categorias</span></a>
    <a href="{{ route('emporiums.index') }}"><i class="fas fa-store"></i><span class="menu-text"> Parceiros</span></a>
    <a href="{{ route('EmporiumProduct.index') }}"><i class="fas fa-handshake"></i><span class="menu-text"> Produtos de parceiros</span></a>
    <a href="{{ route('administrar.perfis') }}"><i class="fas fa-user-cog"></i><span class="menu-text">  perfis</span></a>
    <div class="mt-4">
        <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i><span class="menu-text">Logout</span></a>
    </div>
</div>

@endsection

@section('content')
      <div class="col-lg-10 col-md-9 content">
          @yield('content-main')
      </div>
@endsection

