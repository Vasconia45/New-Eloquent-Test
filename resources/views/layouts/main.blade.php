<!DOCTYPE html>
<html>
    <head></head>
    <body>
    @if(session('successful_message'))
        {{ session('successful_message') }}
    @endif
        <div>
            <h1>@yield('title', "Menu")</h1>
            <div>
                <form>
                    <button type="submit" formaction="{{ route('newuser') }}">New Usuario</button>
                    <button type="submit" formaction="{{ route('newdireccion') }}">New Direccion</button>
                    <button type="submit" formaction="{{ route('asign') }}">Asigna Direccion a Usuario</button>
                </form>
            </div>
        </div>
        @section('content')

        @show
    </body>
</html>