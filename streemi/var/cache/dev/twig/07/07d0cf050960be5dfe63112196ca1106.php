<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* other/upload.html.twig */
class __TwigTemplate_34a724b2d89a75e80ce16c916e40833b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "other/upload.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Admin - Ajouter un film</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \">
    <div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">
        <aside class=\" w-1/6 py-10 pl-10  min-w-min  border-r border-gray-300  hidden md:block \">

            <div class=\" font-bold text-lg flex items-center gap-x-3\">
                <svg class=\"h-8 w-8 fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
                </svg>
                <div class=\"tracking-wide\">Streemi<span class=\"text-red-600\">.</span></div>
            </div>

            <!-- Menu -->
            <div class=\"mt-12 flex flex-col gap-y-4 text-gray-500 fill-gray-500 text-sm\">
                <div class=\"text-gray-400/70  font-medium uppercase\">Menu</div>

                <a class=\"flex items-center space-x-2 py-1font-semibold  border-r-4 border-r-red-600 pr-20 \" href=\"#\">
                    <svg class=\"h-5 w-5 fill-red-600 \" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M5 22h14v0c1.1 0 2-.9 2-2v-9 0c0-.27-.11-.53-.29-.71l-8-8v0c-.4-.39-1.02-.39-1.41 0l-8 8h0c-.2.18-.3.44-.3.71v9 0c0 1.1.89 2 2 2Zm5-2v-5h4v5Zm-5-8.59l7-7 7 7V20h-3v-5 0c0-1.11-.9-2-2-2h-4v0c-1.11 0-2 .89-2 2v5H5Z\"></path>
                    </svg>
                    <span>Accueil</span> </a>
                <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold\" href=\"#\">
                    <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <g>
                            <path d=\"M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z\"></path>
                            <path d=\"M8 16l5.991-2 2-6 -6 2Z\"></path>
                        </g>
                    </svg>
                    <span>Découvrir</span> </a>
                <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                    <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <g>
                            <path d=\"M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z\"></path>
                            <path d=\"M13 7h-2v5.414l3.29 3.29 1.41-1.42 -2.71-2.71Z\"></path>
                        </g>
                    </svg>
                    <span>Mes listes</span> </a>

                <div class=\"mt-8 text-gray-400/70  font-medium uppercase\">Social</div>
                <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                    <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M12 2v0C9.23 2 7 4.23 7 7c0 2.76 2.23 5 5 5 2.76 0 5-2.24 5-5v0c0-2.77-2.24-5-5-5Zm0 8v0c-1.66 0-3-1.35-3-3 0-1.66 1.34-3 3-3 1.65 0 3 1.34 3 3v0c0 1.65-1.35 3-3 3Zm9 11v-1 0c0-3.87-3.14-7-7-7h-4v0c-3.87 0-7 3.13-7 7v1h2v-1 0c0-2.77 2.23-5 5-5h4v0c2.76 0 5 2.23 5 5v1Z\"></path>
                    </svg>
                    <span>Mon profil</span> </a>
                <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                    <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <g>
                            <path d=\"M12 2v0C6.47 2 2 6.47 2 12c0 5.52 4.47 10 10 10 5.52 0 10-4.48 10-10v-.001c0-5.53-4.48-10-10-10Zm0 18v0c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8v0c0 4.41-3.59 8-8 8Z\"></path>
                            <path d=\"M12 8v0c-2.21 0-4 1.79-4 4 0 2.2 1.79 4 4 4 2.2 0 4-1.8 4-4v0c0-2.21-1.8-4-4-4Zm0 6v0c-1.11 0-2-.9-2-2 0-1.11.89-2 2-2 1.1 0 2 .89 2 2v0c0 1.1-.9 2-2 2Z\"></path>
                        </g>
                    </svg>
                    <span>Mes abonnements</span> </a>

                <div class=\"mt-8 text-gray-400/70  font-medium uppercase\">General</div>

                <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 group-hover:stroke-red-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z\"/>
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                    </svg>
                    <span>Paramètres</span> </a>
                <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold\" href=\"#\">
                    <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <g>
                            <path d=\"M16 13v-2H7V8l-5 4 5 4v-3Z\"></path>
                            <path d=\"M20 3h-9c-1.11 0-2 .89-2 2v4h2V5h9v14h-9v-4H9v4c0 1.1.89 2 2 2h9c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2Z\"></path>
                        </g>
                    </svg>
                    <span>Déconnexion</span> </a>

            </div><!-- /Menu -->

        </aside><!-- /Left Sidebar -->
        <main class=\" flex-1 py-10  px-5 sm:px-10 \">
            <header class=\" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 \">
                    <span class=\"mr-6\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\"/>
                          </svg>
                    </span>
                <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
                </svg>
                <div class=\"tracking-wideflex-1\">MMovie<span class=\"text-red-600\">.</span></div>
            </header>
            <section>
                <h1 class=\"text-lg font-medium text-black mb-9\">Ajouter <span class=\"font-bold text-red-600\">des photos</span></h1>
                <a href=\"admin.html\" class=\"underline decoration-2 decoration-red-400 hover:text-red-600 inline-flex items-center\"><svg class=\"fill-current h-4 w-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>arrow-left</title><path d=\"M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z\" /></svg> Revenir à l'administration</a>
            </section>
            <section class=\"mt-9\">
                <form class=\"mt-10 space-y-3\">
                    <div class=\" relative border-2 border-gray-300 border-dashed rounded-lg hover:bg-gray-100 transition\" id=\"dropzone\">
                        <label for=\"file-upload\" class=\"flex items-center justify-center flex-col p-12 cursor-pointer\">
                            <svg class=\"h-12 w-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>cloud-upload</title><path d=\"M11 20H6.5Q4.22 20 2.61 18.43 1 16.85 1 14.58 1 12.63 2.17 11.1 3.35 9.57 5.25 9.15 5.88 6.85 7.75 5.43 9.63 4 12 4 14.93 4 16.96 6.04 19 8.07 19 11 20.73 11.2 21.86 12.5 23 13.78 23 15.5 23 17.38 21.69 18.69 20.38 20 18.5 20H13V12.85L14.6 14.4L16 13L12 9L8 13L9.4 14.4L11 12.85Z\" /></svg>
                            <span class=\"mt-2 text-sm font-medium text-gray-900\">
                                <span class=\"relative cursor-pointer\">
                                    <span class=\"block text-center\">Glissez-déposez vos photos</span>
                                    ici <span class=\"text-red-600\"> ou sélectionnez</span>
                                    <span>des fichiers</span>
                                    <input id=\"file-upload\" multiple name=\"file-upload\" type=\"file\" class=\"sr-only\">
                                </span>
                            </span>
                            <span class=\"mt-1 text-xs text-gray-500\">
                                PNG, JPG, GIF jusqu'à 10MB
                            </span>
                        </label>
                    </div>
                    <ul data-upload-preview-list class=\"space-y-3\">
                        <li data-upload-preview>
                            <div class=\"rounded-md bg-gray-100 py-2 px-4\">
                                <div class=\"flex items-center justify-between\">
                                <span>
                                    <a href=\"//AAAA//\" target=\"_blank\" class=\"text-md pr-3 font-medium text-gray-600 underline decoration-2 decoration-red-600\">
                                        //BBBB//
                                    </a> <span class=\"text-sm opacity-70\">//CCCC//</span>
                                </span>
                                <button class=\"text-gray-600 p-2 rounded hover:bg-gray-300 transition\">
                                    <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>close</title><path d=\"M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z\" /></svg>
                                </button>
                            </div>
                            </div>
                        </li>
                    </ul>
                    <button type=\"submit\" class=\"mx-auto !mt-9 relative flex w-auto bg-red-600 flex-row p-3 text-lg items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition text-white hover:opacity-90 hover:scale-105\">
                        <svg class=\"h-5 w-5 mr-3\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\"/></svg>
                        Ajouter les photos
                    </button>
                </form>
            </section>
            <section class=\"mt-9\">
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4\">

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1441974231531-c6227db76b6e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw5fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1501854140801-50d01698950b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMHx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1469474968028-56623f02e42e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1505765050516-f72dcac9c60e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNHx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1475924156734-496f6cac6ec1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1465146344425-f00d5f5c8f07?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw0fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1426604966848-d7adac402bff?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1419133203517-f3b3ed0ba2bb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxyaXZlcnxlbnwwfDB8fHwxNjk0MDk5ODgyfDA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1498855926480-d98e83099315?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw4fHxyaXZlcnxlbnwwfDB8fHwxNjk0MDk5ODgyfDA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1502754400466-c87ff3039da7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8cml2ZXJ8ZW58MHwwfHx8MTY5NDA5OTg4Mnww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>


    <script>
        const dropzone = document.getElementById('dropzone');
        const previewList = document.querySelector('[data-upload-preview-list]');
        const previewHTMLTemplate = document.querySelector('[data-upload-preview]').innerHTML;
        previewList.innerHTML = '';
        const uploadedFiles = [];

        dropzone.addEventListener('dragover', e => {
            e.preventDefault();
            dropzone.classList.add('border-red-600');
        });

        dropzone.addEventListener('dragleave', e => {
            e.preventDefault();
            dropzone.classList.remove('border-red-600');
        });

        dropzone.addEventListener('drop', e => {
            e.preventDefault();
            dropzone.classList.remove('border-red-600');

            const files = e.dataTransfer.files;
            for (let i = 0; i < files.length; i++) {
                displayPreview(files[i]);
            }
        });

        const input = document.getElementById('file-upload');

        input.addEventListener('change', e => {
            const files = e.target.files;
            for (let i = 0; i < files.length; i++) {
                displayPreview(files[i]);
            }
        });

        function displayPreview(file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const container = document.createElement('li');
                const link = encodeURI(e.target.result);
                const name = file.name.length > 40 ? file.name.substring(0, 20) + ' [...] ' + file.name.substring(file.name.length - 20) : file.name;
                const size = file.size > 1024 * 1024 ? (file.size / (1024 * 1024)).toFixed(2) + ' MB' : (file.size / 1024).toFixed(2) + ' KB';

                container.innerHTML = previewHTMLTemplate
                    .replace(/\\/\\/AAAA\\/\\//g, link)
                    .replace(/\\/\\/BBBB\\/\\//g, name)
                    .replace(/\\/\\/CCCC\\/\\//g, size)
                ;

                previewList.appendChild(container);

                setTimeout(() => {
                    container.querySelector('button').addEventListener('click', e => {
                        e.preventDefault();
                        uploadedFiles.splice(uploadedFiles.indexOf(file), 1);
                        container.remove();
                    });

                    container.querySelector('a').addEventListener('click', e => {
                        e.preventDefault();
                        let w = window.open('about:blank');
                        setTimeout(function(){
                            w.document.write('<iframe src=\"' + link  + '\" style=\"border:0; top:0; left:0; bottom:0; right:0; width:100%; height:100%;\" allowfullscreen></iframe>');
                        }, 0);
                    });
                }, 100);

                uploadedFiles.push(file);

            };
            reader.readAsDataURL(file);
        }

        document.querySelectorAll('[data-copy]').forEach(btn => {
            btn.addEventListener('click', e => {
                const link = e.target.dataset.copy;
                navigator.clipboard.writeText(link);

                const toast = document.createElement('div');
                toast.classList.add('fixed', 'bottom-0', 'right-2', 'bg-red-600', 'text-white', 'px-4', 'py-2', 'rounded-tl-md', 'rounded-tr-md', 'shadow-md');
                toast.textContent = 'Lien copié';
                document.body.appendChild(toast);

                setTimeout(() => {
                    toast.remove();
                }, 2000);
            });
        });

        document.querySelector('form').addEventListener('submit', e => {
            e.preventDefault();
            console.log(uploadedFiles);
        });

    </script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "other/upload.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Admin - Ajouter un film</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \">
    <div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">
        <aside class=\" w-1/6 py-10 pl-10  min-w-min  border-r border-gray-300  hidden md:block \">

            <div class=\" font-bold text-lg flex items-center gap-x-3\">
                <svg class=\"h-8 w-8 fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
                </svg>
                <div class=\"tracking-wide\">Streemi<span class=\"text-red-600\">.</span></div>
            </div>

            <!-- Menu -->
            <div class=\"mt-12 flex flex-col gap-y-4 text-gray-500 fill-gray-500 text-sm\">
                <div class=\"text-gray-400/70  font-medium uppercase\">Menu</div>

                <a class=\"flex items-center space-x-2 py-1font-semibold  border-r-4 border-r-red-600 pr-20 \" href=\"#\">
                    <svg class=\"h-5 w-5 fill-red-600 \" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M5 22h14v0c1.1 0 2-.9 2-2v-9 0c0-.27-.11-.53-.29-.71l-8-8v0c-.4-.39-1.02-.39-1.41 0l-8 8h0c-.2.18-.3.44-.3.71v9 0c0 1.1.89 2 2 2Zm5-2v-5h4v5Zm-5-8.59l7-7 7 7V20h-3v-5 0c0-1.11-.9-2-2-2h-4v0c-1.11 0-2 .89-2 2v5H5Z\"></path>
                    </svg>
                    <span>Accueil</span> </a>
                <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold\" href=\"#\">
                    <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <g>
                            <path d=\"M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z\"></path>
                            <path d=\"M8 16l5.991-2 2-6 -6 2Z\"></path>
                        </g>
                    </svg>
                    <span>Découvrir</span> </a>
                <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                    <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <g>
                            <path d=\"M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z\"></path>
                            <path d=\"M13 7h-2v5.414l3.29 3.29 1.41-1.42 -2.71-2.71Z\"></path>
                        </g>
                    </svg>
                    <span>Mes listes</span> </a>

                <div class=\"mt-8 text-gray-400/70  font-medium uppercase\">Social</div>
                <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                    <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M12 2v0C9.23 2 7 4.23 7 7c0 2.76 2.23 5 5 5 2.76 0 5-2.24 5-5v0c0-2.77-2.24-5-5-5Zm0 8v0c-1.66 0-3-1.35-3-3 0-1.66 1.34-3 3-3 1.65 0 3 1.34 3 3v0c0 1.65-1.35 3-3 3Zm9 11v-1 0c0-3.87-3.14-7-7-7h-4v0c-3.87 0-7 3.13-7 7v1h2v-1 0c0-2.77 2.23-5 5-5h4v0c2.76 0 5 2.23 5 5v1Z\"></path>
                    </svg>
                    <span>Mon profil</span> </a>
                <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                    <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <g>
                            <path d=\"M12 2v0C6.47 2 2 6.47 2 12c0 5.52 4.47 10 10 10 5.52 0 10-4.48 10-10v-.001c0-5.53-4.48-10-10-10Zm0 18v0c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8v0c0 4.41-3.59 8-8 8Z\"></path>
                            <path d=\"M12 8v0c-2.21 0-4 1.79-4 4 0 2.2 1.79 4 4 4 2.2 0 4-1.8 4-4v0c0-2.21-1.8-4-4-4Zm0 6v0c-1.11 0-2-.9-2-2 0-1.11.89-2 2-2 1.1 0 2 .89 2 2v0c0 1.1-.9 2-2 2Z\"></path>
                        </g>
                    </svg>
                    <span>Mes abonnements</span> </a>

                <div class=\"mt-8 text-gray-400/70  font-medium uppercase\">General</div>

                <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 group-hover:stroke-red-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z\"/>
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                    </svg>
                    <span>Paramètres</span> </a>
                <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold\" href=\"#\">
                    <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <g>
                            <path d=\"M16 13v-2H7V8l-5 4 5 4v-3Z\"></path>
                            <path d=\"M20 3h-9c-1.11 0-2 .89-2 2v4h2V5h9v14h-9v-4H9v4c0 1.1.89 2 2 2h9c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2Z\"></path>
                        </g>
                    </svg>
                    <span>Déconnexion</span> </a>

            </div><!-- /Menu -->

        </aside><!-- /Left Sidebar -->
        <main class=\" flex-1 py-10  px-5 sm:px-10 \">
            <header class=\" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 \">
                    <span class=\"mr-6\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\"/>
                          </svg>
                    </span>
                <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
                </svg>
                <div class=\"tracking-wideflex-1\">MMovie<span class=\"text-red-600\">.</span></div>
            </header>
            <section>
                <h1 class=\"text-lg font-medium text-black mb-9\">Ajouter <span class=\"font-bold text-red-600\">des photos</span></h1>
                <a href=\"admin.html\" class=\"underline decoration-2 decoration-red-400 hover:text-red-600 inline-flex items-center\"><svg class=\"fill-current h-4 w-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>arrow-left</title><path d=\"M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z\" /></svg> Revenir à l'administration</a>
            </section>
            <section class=\"mt-9\">
                <form class=\"mt-10 space-y-3\">
                    <div class=\" relative border-2 border-gray-300 border-dashed rounded-lg hover:bg-gray-100 transition\" id=\"dropzone\">
                        <label for=\"file-upload\" class=\"flex items-center justify-center flex-col p-12 cursor-pointer\">
                            <svg class=\"h-12 w-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>cloud-upload</title><path d=\"M11 20H6.5Q4.22 20 2.61 18.43 1 16.85 1 14.58 1 12.63 2.17 11.1 3.35 9.57 5.25 9.15 5.88 6.85 7.75 5.43 9.63 4 12 4 14.93 4 16.96 6.04 19 8.07 19 11 20.73 11.2 21.86 12.5 23 13.78 23 15.5 23 17.38 21.69 18.69 20.38 20 18.5 20H13V12.85L14.6 14.4L16 13L12 9L8 13L9.4 14.4L11 12.85Z\" /></svg>
                            <span class=\"mt-2 text-sm font-medium text-gray-900\">
                                <span class=\"relative cursor-pointer\">
                                    <span class=\"block text-center\">Glissez-déposez vos photos</span>
                                    ici <span class=\"text-red-600\"> ou sélectionnez</span>
                                    <span>des fichiers</span>
                                    <input id=\"file-upload\" multiple name=\"file-upload\" type=\"file\" class=\"sr-only\">
                                </span>
                            </span>
                            <span class=\"mt-1 text-xs text-gray-500\">
                                PNG, JPG, GIF jusqu'à 10MB
                            </span>
                        </label>
                    </div>
                    <ul data-upload-preview-list class=\"space-y-3\">
                        <li data-upload-preview>
                            <div class=\"rounded-md bg-gray-100 py-2 px-4\">
                                <div class=\"flex items-center justify-between\">
                                <span>
                                    <a href=\"//AAAA//\" target=\"_blank\" class=\"text-md pr-3 font-medium text-gray-600 underline decoration-2 decoration-red-600\">
                                        //BBBB//
                                    </a> <span class=\"text-sm opacity-70\">//CCCC//</span>
                                </span>
                                <button class=\"text-gray-600 p-2 rounded hover:bg-gray-300 transition\">
                                    <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>close</title><path d=\"M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z\" /></svg>
                                </button>
                            </div>
                            </div>
                        </li>
                    </ul>
                    <button type=\"submit\" class=\"mx-auto !mt-9 relative flex w-auto bg-red-600 flex-row p-3 text-lg items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition text-white hover:opacity-90 hover:scale-105\">
                        <svg class=\"h-5 w-5 mr-3\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\"/></svg>
                        Ajouter les photos
                    </button>
                </form>
            </section>
            <section class=\"mt-9\">
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4\">

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1441974231531-c6227db76b6e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw5fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1501854140801-50d01698950b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMHx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1469474968028-56623f02e42e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1505765050516-f72dcac9c60e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNHx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1475924156734-496f6cac6ec1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1465146344425-f00d5f5c8f07?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw0fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1426604966848-d7adac402bff?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1419133203517-f3b3ed0ba2bb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxyaXZlcnxlbnwwfDB8fHwxNjk0MDk5ODgyfDA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1498855926480-d98e83099315?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw4fHxyaXZlcnxlbnwwfDB8fHwxNjk0MDk5ODgyfDA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1502754400466-c87ff3039da7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8cml2ZXJ8ZW58MHwwfHx8MTY5NDA5OTg4Mnww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>


    <script>
        const dropzone = document.getElementById('dropzone');
        const previewList = document.querySelector('[data-upload-preview-list]');
        const previewHTMLTemplate = document.querySelector('[data-upload-preview]').innerHTML;
        previewList.innerHTML = '';
        const uploadedFiles = [];

        dropzone.addEventListener('dragover', e => {
            e.preventDefault();
            dropzone.classList.add('border-red-600');
        });

        dropzone.addEventListener('dragleave', e => {
            e.preventDefault();
            dropzone.classList.remove('border-red-600');
        });

        dropzone.addEventListener('drop', e => {
            e.preventDefault();
            dropzone.classList.remove('border-red-600');

            const files = e.dataTransfer.files;
            for (let i = 0; i < files.length; i++) {
                displayPreview(files[i]);
            }
        });

        const input = document.getElementById('file-upload');

        input.addEventListener('change', e => {
            const files = e.target.files;
            for (let i = 0; i < files.length; i++) {
                displayPreview(files[i]);
            }
        });

        function displayPreview(file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const container = document.createElement('li');
                const link = encodeURI(e.target.result);
                const name = file.name.length > 40 ? file.name.substring(0, 20) + ' [...] ' + file.name.substring(file.name.length - 20) : file.name;
                const size = file.size > 1024 * 1024 ? (file.size / (1024 * 1024)).toFixed(2) + ' MB' : (file.size / 1024).toFixed(2) + ' KB';

                container.innerHTML = previewHTMLTemplate
                    .replace(/\\/\\/AAAA\\/\\//g, link)
                    .replace(/\\/\\/BBBB\\/\\//g, name)
                    .replace(/\\/\\/CCCC\\/\\//g, size)
                ;

                previewList.appendChild(container);

                setTimeout(() => {
                    container.querySelector('button').addEventListener('click', e => {
                        e.preventDefault();
                        uploadedFiles.splice(uploadedFiles.indexOf(file), 1);
                        container.remove();
                    });

                    container.querySelector('a').addEventListener('click', e => {
                        e.preventDefault();
                        let w = window.open('about:blank');
                        setTimeout(function(){
                            w.document.write('<iframe src=\"' + link  + '\" style=\"border:0; top:0; left:0; bottom:0; right:0; width:100%; height:100%;\" allowfullscreen></iframe>');
                        }, 0);
                    });
                }, 100);

                uploadedFiles.push(file);

            };
            reader.readAsDataURL(file);
        }

        document.querySelectorAll('[data-copy]').forEach(btn => {
            btn.addEventListener('click', e => {
                const link = e.target.dataset.copy;
                navigator.clipboard.writeText(link);

                const toast = document.createElement('div');
                toast.classList.add('fixed', 'bottom-0', 'right-2', 'bg-red-600', 'text-white', 'px-4', 'py-2', 'rounded-tl-md', 'rounded-tr-md', 'shadow-md');
                toast.textContent = 'Lien copié';
                document.body.appendChild(toast);

                setTimeout(() => {
                    toast.remove();
                }, 2000);
            });
        });

        document.querySelector('form').addEventListener('submit', e => {
            e.preventDefault();
            console.log(uploadedFiles);
        });

    </script>
</body>
</html>
", "other/upload.html.twig", "C:\\Users\\aitou\\OneDrive\\Bureau\\esgi_cours\\symfony\\cours-symfony-main\\streemi\\templates\\other\\upload.html.twig");
    }
}