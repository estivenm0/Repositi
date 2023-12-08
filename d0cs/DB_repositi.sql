-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla repositi.tags: ~25 rows (aproximadamente)
INSERT INTO `tags` (`id`, `name`) VALUES
	(2, 'Descarga-Video'),
	(3, 'Seguridad-Cibernetica'),
	(4, 'Editar-PDF'),
	(5, 'Escaneo-Archivos-URLs'),
	(6, 'Directorio-Números'),
	(7, 'Info-Llamadas'),
	(8, 'Educación'),
	(9, 'Diagramación'),
	(10, 'Cursos'),
	(11, 'Libros'),
	(12, 'Formularios-Interactivos'),
	(13, 'NO-CODE'),
	(14, 'Compresión-Imágenes'),
	(15, 'Optimización'),
	(16, 'Herramienta'),
	(17, 'Entretenimiento'),
	(18, 'Juegos'),
	(19, 'Emulador'),
	(20, 'Linux'),
	(21, 'Programación'),
	(22, 'Idiomas'),
	(23, 'IA'),
	(24, 'Traductor'),
	(25, 'Email-Temporal');

-- Volcando datos para la tabla repositi.webs: ~24 rows (aproximadamente)
INSERT INTO `webs` (`id`, `active`, `name`, `description`, `favicon`, `slug`, `URL`, `type`, `owner`, `video`, `created_at`, `updated_at`) VALUES
	(1, 1, 'iLovePDF | Herramientas PDF online gratis', 'iLovePDF es un servicio online para trabajar con archivos PDF completamente gratuito y fácil de usar. ¡Unir, dividir, comprimir y convertir PDF!', 'https://www.ilovepdf.com/img/favicons-pdf/favicon-32x32.png', 'ilovepdf-herramientas-pdf-online-gratis', 'https://www.ilovepdf.com/es', 'free', NULL, NULL, '2023-10-15 07:58:38', '2023-10-15 08:19:09'),
	(2, 1, 'Convertidor MP4, MP3 ❤️ - Convertir music and video en línea de YouTube', '✅ Convierta y descarga videos en línea a .mp3, .mp4 y otros formatos en alta calidad. ☝  ¡la conversión requiere 3 clics!', 'https://es.onlinevideoconverter.pro/img/favicon.png', 'convertidor-mp4-mp3-convertir-music-and-video-en-linea-de-youtube', 'https://es.onlinevideoconverter.pro/215UE/', 'free', NULL, NULL, '2023-10-15 08:04:55', '2023-10-15 08:09:08'),
	(3, 1, 'VirusTotal', 'VirusTotal es una herramienta en línea que verifica si un archivo o sitio web contiene software malicioso o riesgos de seguridad. Agrupa resultados de varios programas antivirus y escáneres para ofrecer un informe completo sobre la seguridad.', 'https://www.virustotal.com/gui/images/favicon.png', 'virustotal', 'https://www.virustotal.com/gui/home/upload', 'freemium', NULL, NULL, '2023-10-15 08:11:07', '2023-10-15 08:18:27'),
	(4, 1, 'tellows - La comunidad de números de teléfonos y de spam telefónico', '¿Buscas información sobre el número que te ha llamado? tellows te puede ayudar. Mira los comentarios de los otros usuarios y haz tus propias evaluaciones.', 'https://www.tellows.es/images/favicon-res.svg', 'tellows-la-comunidad-de-numeros-de-telefonos-y-de-spam-telefonico', 'https://www.tellows.es/', 'free', NULL, NULL, '2023-10-15 08:24:37', '2023-10-15 08:24:37'),
	(5, 1, 'Squoosh', 'Squoosh es una herramienta de optimización de imágenes avanzada que te permite reducir el tamaño de tus imágenes y comparar diferentes códecs de imagen directamente en tu navegador', 'https://squoosh.app/c/favicon-c9cf50ef.ico', 'squoosh', 'https://squoosh.app/', NULL, NULL, NULL, '2023-10-15 08:38:36', '2023-10-15 08:38:36'),
	(6, 1, 'Free Programming Books – GoalKicker.com', 'Free Programming Books on Android development, C, C#, CSS, HTML5, iOS development, Java, JavaScript, PowerShell, PHP, Python, SQL Sever and more', 'https://books.goalkicker.com/favicon.ico', 'free-programming-books-goalkickercom', 'https://books.goalkicker.com/', 'free', NULL, NULL, '2023-10-15 08:41:28', '2023-10-15 08:41:28'),
	(7, 1, 'Flowchart Maker & Online Diagram Software', 'draw.io es un software de diagramas en línea gratuito para crear diagramas de flujo, diagramas de procesos, organigramas, UML, ER y diagramas de red.', 'https://app.diagrams.net/images/favicon-32x32.png', 'flowchart-maker-online-diagram-software', 'https://app.diagrams.net/', 'free', NULL, NULL, '2023-10-15 08:43:24', '2023-10-15 08:43:24'),
	(8, 1, 'Typeform: People-Friendly Forms and Surveys', 'Build beautiful, interactive forms — get more responses. No coding needed. Templates for quizzes, research, feedback, lead generation, and more. Sign up FREE.', 'https://www.typeform.com/favicon-32x32.png', 'typeform-people-friendly-forms-and-surveys', 'https://www.typeform.com/', 'pay', NULL, NULL, '2023-10-15 08:45:51', '2023-10-15 08:45:51'),
	(9, 1, 'Claseflix - Cursos online gratuitos', 'Somos una plataforma de cursos online y gratuitos para que aprendas de forma práctica y complementes tu currículo. Explore nuestro catálogo y comience a estudiar ahora.', 'https://claseflix.com/favicon.png', 'claseflix-cursos-online-gratuitos', 'https://claseflix.com/', 'free', NULL, NULL, '2023-10-15 08:47:51', '2023-10-15 08:47:51'),
	(10, 1, 'Juegos Gratis en Línea en 1001juegos 🎮 ¡Juega Ahora!', 'Juega a juegos gratis en línea en 1001 Juegos, el mejor sitio para jugar a juegos de navegador de calidad. Añadimos juegos nuevos cada día. ¡Que te diviertas!', 'https://images.crazygames.com/favicons/favicon.ico?auto=format%2Ccompress&q=45&cs=strip&ch=DPR&w=16&h=16&fit=crop&crop=entropy', 'juegos-gratis-en-linea-en-1001juegos-juega-ahora', 'https://www.1001juegos.com/', 'free', NULL, NULL, '2023-10-15 21:50:37', '2023-10-15 21:50:37'),
	(11, 1, 'Emu Games - Download ROMs and FREE Emulator Games', '¡Descarga ROM y juega juegos de emulador para GBA, PSP, DS, SNES, N64, PS1, NES, PS2, SEGA y más! Juegos completos compatibles con Android, Windows PC, Mac e iOS.', 'https://www.emugames.net/images/logo2.png', 'emu-games-download-roms-and-free-emulator-games', 'https://www.emugames.net/', 'free', NULL, NULL, '2023-10-15 21:59:18', '2023-10-15 21:59:18'),
	(12, 1, 'DistroSea', 'Pruebe rápidamente distribuciones de Linux en línea sin instalarlas en sus computadoras personales', 'https://distrosea.com/hotlink-ok/og.png', 'distrosea', 'https://distrosea.com/', 'free', NULL, NULL, '2023-10-15 22:10:23', '2023-10-16 18:33:32'),
	(13, 1, 'W3Schools Online Web Tutorials', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.', 'https://www.w3schools.com/favicon.ico', 'w3schools-online-web-tutorials', 'https://www.w3schools.com/', 'freemium', NULL, NULL, '2023-10-16 03:23:56', '2023-10-16 03:23:56'),
	(14, 0, 'Read Along', '', 'https://www.gstatic.com/seekh/web/favicon/favicon_64.png', 'read-along', 'https://readalong.google.com/', 'free', NULL, NULL, '2023-10-16 03:32:51', '2023-10-16 03:32:55'),
	(15, 1, 'Omatsuri', 'Aplicación web progresiva con 12 herramientas enfocadas en el frontend de código abierto.', 'https://omatsuri.app/assets/favicon-16x16.png', 'omatsuri', 'https://omatsuri.app/', 'free', NULL, NULL, '2023-10-16 03:39:26', '2023-10-16 03:39:26'),
	(16, 1, 'South Park - Mira Episodios Completos Gratis | South Park Studios Español', 'Ver los episodios completos de South Park - una comedia animada de televisión creada por Trey Parker y Matt Stone.', 'https://www.southpark.lat/favicon-16x16.png', 'south-park-mira-episodios-completos-gratis-south-park-studios-espanol', 'https://www.southpark.lat/', 'free', NULL, NULL, '2023-10-16 06:40:25', '2023-10-16 06:40:25'),
	(17, 1, 'DeepL Translate: The world\'s most accurate translator', 'Traduce textos y archivos de documentos completos al instante. Traducciones precisas para particulares y equipos. Millones de personas traducen con DeepL cada día.', 'https://static.deepl.com/img/favicon/favicon_16.png', 'deepl-translate-the-worlds-most-accurate-translator', 'https://www.deepl.com/', 'freemium', NULL, NULL, '2023-10-18 01:50:07', '2023-10-18 01:50:07'),
	(18, 1, 'TEMPMAIL', 'Olvídate del correo basura, correos de fraude electrónico, robo de cuentas y ladrones de información. Mantén limpio y seguro tu correo electrónico real. Temp Mail brinda direcciones de correo electrónico temporales, seguras, anónimas y gratuitas.', 'https://temp-mail.org/images/tm_mobile_icon@2x.png', 'tempmail', 'https://temp-mail.org/es/', 'freemium', NULL, NULL, '2023-10-18 01:55:19', '2023-10-18 01:55:19'),
	(19, 1, 'Humata: ChatGPT for Your Data Files', 'Unlock AI insights for your files instantly. Ask, learn, and extract data 10X faster with Humata.', 'https://www.humata.ai/favicon.ico', 'humata-chatgpt-for-your-data-files', 'https://www.humata.ai/', 'freemium', NULL, NULL, '2023-10-18 02:10:40', '2023-10-18 02:10:40'),
	(20, 1, 'LanguageTool - Corrector ortográfico, gramatical y de estilo', 'LanguageTool es un servicio de revisión de textos en inglés, español/castellano, catalán/valenciano, francés y 30 idiomas más. Revisa al instante los errores de gramática y estilo de tu texto.', 'https://languagetool.org/images/favicons/favicon-16x16.png', 'languagetool-corrector-ortografico-gramatical-y-de-estilo', 'https://languagetool.org/es', 'freemium', NULL, NULL, '2023-10-18 02:17:04', '2023-10-18 02:17:04'),
	(21, 1, 'PageSpeed Insights', 'PageSpeed Insights (PSI) informa sobre el rendimiento de las páginas tanto en dispositivos móviles como en ordenadores y ofrece sugerencias para mejorarlas.', 'https://ssl.gstatic.com/pagespeed/insights/ui/logo/favicon_48.png', 'pagespeed-insights', 'https://pagespeed.web.dev/', 'free', NULL, NULL, '2023-10-18 03:16:25', '2023-11-19 20:14:40'),
	(22, 1, 'Refactorización y patrones de diseño', 'La refactorización es un proceso controlable de mejora del código sin crear nuevas funcionalidades. Los patrones de diseño son soluciones habituales a problemas que ocurren con frecuencia en el diseño de software.', 'https://refactoring.guru/favicon.png', 'refactorizacion-y-patrones-de-diseno', 'https://refactoring.guru/es', 'freemium', NULL, NULL, '2023-10-21 02:32:43', '2023-11-29 05:20:35'),
	(23, 1, 'unDraw - Open source illustrations for any idea', 'The design project with open-source illustrations for any idea you can imagine and create. Create beautiful websites, products and applications with your color, for free.', 'https://undraw.co/favicon-32x32.png', 'undraw-open-source-illustrations-for-any-idea', 'https://undraw.co/', 'free', NULL, NULL, '2023-11-29 05:15:24', '2023-11-29 05:15:24'),
	(25, 1, '1000+ Free Tailwind Examples', 'Community-build Tailwind Components Library.', 'https://tailwindflex.com/public/images/logo.svg', '1000-free-tailwind-examples', 'https://tailwindflex.com/', 'free', NULL, NULL, '2023-11-29 05:28:47', '2023-11-29 05:29:02');

-- Volcando datos para la tabla repositi.web_tags: ~55 rows (aproximadamente)
INSERT INTO `web_tags` (`id`, `web_id`, `tag_id`) VALUES
	(5, 1, 4),
	(18, 1, 16),
	(2, 2, 2),
	(19, 2, 16),
	(3, 3, 3),
	(4, 3, 5),
	(20, 3, 16),
	(6, 4, 3),
	(7, 4, 6),
	(8, 4, 7),
	(21, 4, 16),
	(16, 5, 14),
	(17, 5, 15),
	(24, 5, 16),
	(12, 6, 8),
	(13, 6, 11),
	(11, 7, 9),
	(23, 7, 16),
	(14, 8, 12),
	(15, 8, 13),
	(22, 8, 16),
	(9, 9, 8),
	(10, 9, 10),
	(58, 9, 21),
	(25, 10, 17),
	(26, 10, 18),
	(27, 11, 17),
	(29, 11, 18),
	(28, 11, 19),
	(30, 12, 16),
	(35, 12, 20),
	(31, 13, 8),
	(34, 13, 21),
	(32, 14, 8),
	(33, 14, 22),
	(36, 15, 16),
	(37, 15, 21),
	(38, 16, 17),
	(39, 17, 16),
	(41, 17, 22),
	(40, 17, 23),
	(42, 17, 24),
	(44, 18, 3),
	(43, 18, 16),
	(45, 18, 25),
	(46, 19, 16),
	(47, 19, 23),
	(48, 20, 16),
	(49, 20, 22),
	(50, 21, 16),
	(51, 21, 21),
	(52, 22, 8),
	(53, 22, 21),
	(55, 23, 9),
	(54, 23, 16),
	(59, 25, 16),
	(60, 25, 21);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
