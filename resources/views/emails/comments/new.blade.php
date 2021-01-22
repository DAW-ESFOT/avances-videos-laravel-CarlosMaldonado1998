@component('mail::message')

    # Hola!

    ## Tu artículo ha recibido nuevo comentario.
    {{$comment->text}}

    ![Imagen del articulo] ({{asset('storage/'.$comment->article->image)}} "Imagen")


    @component('mail::panel')
        This is the panel content.
    @endcomponent

    @component('mail::button', ['url' => URL::to('/')])

        Mira tu artículo aquí

    @endcomponent

    @component('mail::table')
        | Laravel       | Table         | Example  |
        | ------------- |:-------------:| --------:|
        | Col 2 is      | Centered      | $10      |
        | Col 3 is      | Right-Aligned | $20      |
    @endcomponent

    Gracias,
    {{ config('app.name') }}

@endcomponent
