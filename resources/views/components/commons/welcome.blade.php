@if(Illuminate\Support\Carbon::now()->diffInhours (Auth()->user()->created_at)  < 10)
<div class="p-6 lg:p-8 bg-white border-b dark:bg-gray-700  border-gray-200">
        <h1 class="mt-4 text-center md:text-2xl font-medium text-gray-900 dark:text-white">
            ¡Bienvenido! 
            <span class="block text-slate-500  dark:text-blue-600 opacity-50" >
                ***Este apartado desaparecerá en 1 hrs***
            </span> 
        </h1>
        
        <p class="mt-6 md:px-6 text-gray-500  dark:text-gray-300 leading-relaxed">
            Estamos encantados de tenerte como parte de nuestra comunidad. Como usuario, tienes acceso a una gran variedad de recursos y características que esperamos que encuentres útiles y emocionantes. Aquí tienes algunos pasos que te sugerimos seguir para aprovechar al máximo tu experiencia en Repositi:
        </p>
    </div>

    <div class="bg-gray-200 dark:bg-gray-700 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
        <div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 2.5a5.25 5.25 0 0 0-2.519 9.857 9.005 9.005 0 0 0-6.477 8.37.75.75 0 0 0 .727.773H20.27a.75.75 0 0 0 .727-.772 9.005 9.005 0 0 0-6.477-8.37A5.25 5.25 0 0 0 12 2.5Z"></path></svg>
                <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                    <a href="{{route('profile.show')}}">Completa tu perfil </a>
                </h2>
            </div>

            <p class="mt-4 text-gray-500 dark:text-gray-200 text-sm leading-relaxed">
                ¿Qué estás esperando? Completa tu perfil ahora y forma parte activa de nuestra comunidad.
            </p>

            <p class="mt-4 text-sm">
                <a href="{{route('profile.show')}}" class="inline-flex items-center font-semibold text-indigo-700 dark:text-emerald-500 ">
                    Completar Perfil ->
                </a>
            </p>
        </div>

        <div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="22" height="22"><path d="M10.75 9a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5h-1.5Z"></path><path d="M0 3.75C0 2.784.784 2 1.75 2h12.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0 1 14.25 14H1.75A1.75 1.75 0 0 1 0 12.25ZM14.5 6.5h-13v5.75c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25Zm0-2.75a.25.25 0 0 0-.25-.25H1.75a.25.25 0 0 0-.25.25V5h13Z"></path></svg>
                <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                    <a href="{{route('webs')}}">Explora los recursos </a>
                </h2>
            </div>

            <p class="mt-4 text-gray-500 dark:text-gray-200 text-sm leading-relaxed">
                Explora y descubre una variedad de recursos web útiles. Tu opinión es esencial para nosotros. ¿Viste algo que podría ser mejor?

            </p>

            <section class="mt-4 text-sm flex items-center justify-around gap-3">
                <a href="{{route('webs')}}" class="font-semibold dark:text-emerald-500 text-indigo-700">
                    Webs
                </a>
                <a href="{{route('profile', Auth::user()->nickname)}}" class="font-semibold dark:text-emerald-500  text-indigo-700">
                    perfil
                </a> 
                 <a href="#favoritas" class="font-semibold  bg-slate-200  rounded-md p-2 text-indigo-700">
                    favoritas
                </a>   
                


            </section>
        </div>
    </div>
@endif

<div class=" mt-2" id="favoritas" >
    @livewire('user.panel')   
</div>


