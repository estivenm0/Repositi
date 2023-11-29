<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Desarrollo web',
            'Diseño gráfico',
            'Productividad',
            'Redes sociales',
            'Comunicación',
            'Educación',
            'Finanzas',
            'Salud y bienestar',
            'Entretenimiento',
            'Viajes',
            'Noticias y medios',
            'JavaScript',
            'Python',
            'Ruby',
            'Java',
            'PHP',
            'CSS',
            'HTML',
            'React',
            'Angular',
            'Vue.js',
            'Windows',
            'macOS',
            'Linux',
            'Android',
            'iOS',
            'WordPress',
            'Inglés',
            'Español',
            'Cifrado',
            'Autenticación',
            'Seguridad de datos',
            'VPN',
            'Antivirus',
            'SEO',
            'Publicidad en redes sociales',
            'Email marketing',
            'Analítica web',
            'Google Ads',
            'Android Development',
            'iOS Development',
            'React Native',
            'Flutter',
            'Privacidad',
            'Correo anónimo',
            'Comunicación segura',
            'Correo electrónico',
            'Enviar correo anónimo',
            'Anonimato en el correo',
            'Email seguro',
            'Comunicación anónima',
            'Mensajes anónimos',
            'Envío de correos sin revelar la identidad',
            'Herramientas de privacidad',
            'Anonimato en línea',
            'Protección de datos',
            'Seguridad en línea',
            'Protección de identidad',
            'Navegación anónima',
            'Confidencialidad',
            'Correo electrónico confidencial',
            'Mensajes secretos',
            'Correo seguro',
            'Protección de correo electrónico',
            'Cifrado de correo',
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag,
            ]);
        }
        

    }
}
