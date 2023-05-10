@extends('layouts/layout')
@section('content')
    <main>
        <h1>CURRENT SERIES</h1>
        
        <img src={{Vite::asset("resources/img/adv.jpg")}} alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae totam inventore possimus necessitatibus, accusantium et eius quas impedit debitis sit nam provident quis ipsam doloribus. Fugiat rerum quam aut debitis!</p>
        <div class="container-btn">


            <button > <a href="/">LOAD MORE</a> </button>
        </div>
    </main>
@endsection