@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Chat room</h1>
                <chat-log :messages="messages"></chat-log>
                <chat-composer v-on:messagesent="addMessage"></chat-composer>
            </div>
        </div>
    </div>
@endsection