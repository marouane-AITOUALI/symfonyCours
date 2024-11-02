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

/* movie/detail_serie.html.twig */
class __TwigTemplate_cc55214dee8e06e4a7f27978526435a8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie/detail_serie.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Détail d'une série</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \" >
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
                <svg class=\"h-5 w-5 fill-red-600 \" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" >
                    <path d=\"M5 22h14v0c1.1 0 2-.9 2-2v-9 0c0-.27-.11-.53-.29-.71l-8-8v0c-.4-.39-1.02-.39-1.41 0l-8 8h0c-.2.18-.3.44-.3.71v9 0c0 1.1.89 2 2 2Zm5-2v-5h4v5Zm-5-8.59l7-7 7 7V20h-3v-5 0c0-1.11-.9-2-2-2h-4v0c-1.11 0-2 .89-2 2v5H5Z\"></path>
                </svg>
                <span>Accueil</span>
            </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold\" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z\"></path>
                        <path d=\"M8 16l5.991-2 2-6 -6 2Z\"></path>
                    </g>
                </svg>
                <span>Découvrir</span>
            </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z\"></path>
                        <path d=\"M13 7h-2v5.414l3.29 3.29 1.41-1.42 -2.71-2.71Z\"></path>
                    </g>
                </svg>
                <span>Mes listes</span>
            </a>

            <div class=\"mt-8 text-gray-400/70  font-medium uppercase\">Social</div>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <path d=\"M12 2v0C9.23 2 7 4.23 7 7c0 2.76 2.23 5 5 5 2.76 0 5-2.24 5-5v0c0-2.77-2.24-5-5-5Zm0 8v0c-1.66 0-3-1.35-3-3 0-1.66 1.34-3 3-3 1.65 0 3 1.34 3 3v0c0 1.65-1.35 3-3 3Zm9 11v-1 0c0-3.87-3.14-7-7-7h-4v0c-3.87 0-7 3.13-7 7v1h2v-1 0c0-2.77 2.23-5 5-5h4v0c2.76 0 5 2.23 5 5v1Z\"></path>
                </svg>
                <span>Mon profil</span>
            </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M12 2v0C6.47 2 2 6.47 2 12c0 5.52 4.47 10 10 10 5.52 0 10-4.48 10-10v-.001c0-5.53-4.48-10-10-10Zm0 18v0c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8v0c0 4.41-3.59 8-8 8Z\"></path>
                        <path d=\"M12 8v0c-2.21 0-4 1.79-4 4 0 2.2 1.79 4 4 4 2.2 0 4-1.8 4-4v0c0-2.21-1.8-4-4-4Zm0 6v0c-1.11 0-2-.9-2-2 0-1.11.89-2 2-2 1.1 0 2 .89 2 2v0c0 1.1-.9 2-2 2Z\"></path>
                    </g>
                </svg>
                <span>Mes abonnements</span>
            </a>

            <div class=\"mt-8 text-gray-400/70  font-medium uppercase\">General</div>

            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 group-hover:stroke-red-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z\" />
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\" />
                </svg>
                <span>Paramètres</span>
            </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold\" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M16 13v-2H7V8l-5 4 5 4v-3Z\"></path>
                        <path d=\"M20 3h-9c-1.11 0-2 .89-2 2v4h2V5h9v14h-9v-4H9v4c0 1.1.89 2 2 2h9c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2Z\"></path>
                    </g>
                </svg>
                <span>Déconnexion</span>
            </a>

        </div><!-- /Menu -->

    </aside><!-- /Left Sidebar -->
    <main class=\" flex-1 py-10  px-5 sm:px-10 \">
        <header class=\" font-bold text-lg flex items-center gap-x-3 md:hidden mb-9\">
                <span class=\"mr-6\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\" />
                      </svg>
                </span>
            <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wideflex-1\">MMovie<span class=\"text-red-600\">.</span></div>
        </header>
        <section class=\"\">
            <h1 class=\"text-lg font-medium text-black\">Détails de <span class=\"font-bold text-red-600\">Psych, Enquêteur malgrés lui</span></h1>
            <div class=\"flex flex-col items-center mt-9\">
                <a class=\"relative flex w-full flex-row p-3 items-center justify-center rounded-lg overflow-hidden border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>repeat-variant</title><path d=\"M6,5.75L10.25,10H7V16H13.5L15.5,18H7A2,2 0 0,1 5,16V10H1.75L6,5.75M18,18.25L13.75,14H17V8H10.5L8.5,6H17A2,2 0 0,1 19,8V14H22.25L18,18.25Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-md\">Trouver un film <span class=\"text-red-600\">similaire</span> </span>
                </a>
            </div>
        </section>
        <section class=\"mt-9\">
            <div class=\"flex flex-col justify-between mt-4 bg-black/10 bg-blend-multiply h-96 overflow-hidden bg-cover bg-top px-7 pt-4 pb-6 text-white -ml-10 -mr-10 rounded-none\"
                 style=\"background-image: url('https://media.senscritique.com/media/000009609004/0/psych_enqueteur_malgre_lui.jpg');\" >
                <div class=\"flex -space-x-1 items-center \">
                    <img class=\"rounded-full w-7 h-7 shadow-lg border border-white\" src=\"https://random.imagecdn.app/100/100?a\" alt=\"\" srcset=\"\">
                    <img class=\"rounded-full w-7 h-7 shadow-lg border border-white\" src=\"https://random.imagecdn.app/100/100?b\" alt=\"\" srcset=\"\">
                    <img class=\"rounded-full w-7 h-7 shadow-lg border border-white\" src=\"https://random.imagecdn.app/100/100?c\" alt=\"\" srcset=\"\">
                    <span class=\"pl-4 text-xs drop-shadow-lg\">Recommandé par 12 amis</span>
                </div>
                <div class=\"bg-gradient-to-r from-black/40 to-transparent -mx-7 -mb-6 px-7 pb-6 pt-2\">
                    <span class=\"uppercase text-3xl font-semibold drop-shadow-lg \">Psych, Enquêteur malgrés lui - S01E02</span>
                    <div class=\"mt-4 flex items-center justify-between\">
                        <div class=\"flex space-x-3 items-center\">
                            <a href=\"#\" class=\"px-5 flex items-center justify-center py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block\">
                                <svg class=\"h-5 w-5 fill-current mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>play-box</title><path d=\"M19 3H5C3.89 3 3 3.89 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.89 20.1 3 19 3M10 16V8L15 12\" /></svg>
                                Reprendre la lecture
                            </a>
                            <a href=\"#\" class=\"px-5 flex items-center justify-center py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block\">
                                <svg class=\"h-5 w-5 fill-current mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>check-circle</title><path d=\"M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z\" /></svg>
                                Terminer
                            </a>
                            <a href=\"#\" class=\"px-5 flex items-center justify-center py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block\">
                                <svg class=\"h-5 w-5 fill-current mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>reload</title><path d=\"M2 12C2 16.97 6.03 21 11 21C13.39 21 15.68 20.06 17.4 18.4L15.9 16.9C14.63 18.25 12.86 19 11 19C4.76 19 1.64 11.46 6.05 7.05C10.46 2.64 18 5.77 18 12H15L19 16H19.1L23 12H20C20 7.03 15.97 3 11 3C6.03 3 2 7.03 2 12Z\" /></svg>
                                Recommencer depuis le début
                            </a>
                            <a href=\"#\" class=\"p-2.5 bg-gray-800/80 rounded-lg hover:bg-red-600\">
                                <svg class=\"h-4 w-4 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>dots-vertical</title><path d=\"M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z\" /></svg>
                            </a>
                        </div>
                        <div class=\"text-right space-x-1\">
                            <span class=\"bg-white/30 py-1 px-3 text-xxs rounded\">0h25 restants</span>
                            <span class=\"bg-white/30 py-1 px-3 text-xxs rounded\">12 visionnages</span>
                            <span class=\"bg-white/30 py-1 px-3 text-xxs rounded\">12 commentaires</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"mt-9\">
            <div class=\"max-w-3xl mx-auto\">
                <h2 class=\"text-lg font-medium text-black\">Les <span class=\"font-bold text-red-600\">épisodes</span></h2>
                <ul>
                    <li class=\"mt-4 flex flex-row gap-y-5 p-4 rounded-lg transition cursor-pointer hover:bg-gray-100\">
                        <div class=\"relative flex flex-col rounded-xl w-1/5 overflow-hidden aspect-square border cursor-pointer transition hover:shadow-md bg-center bg-cover\" style=\"background-image: url('https://www.numerama.com/wp-content/uploads/2024/05/psych-shawn-kate-gus.jpg')\">
                            <div class=\"absolute top-0 left-0 w-full h-full bg-black/10 flex items-center justify-center text-white hover:bg-black/60 transition opacity-10 hover:opacity-100\">
                                <svg class=\"h-12 w-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                    <title>play</title>
                                    <path d=\"M8,5.14V19.14L19,12.14L8,5.14Z\"/>
                                </svg>
                            </div>
                        </div>
                        <div class=\"flex items-start justify-center w-4/5 flex-col pl-8\">
                            <h2 class=\"font-bold text-xl\">Un médium de trop</h2>
                            <h3 class=\"font-medium text-lg text-black/70\">S4 - E01</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem exercitationem harum natus necessitatibus nesciunt provident quasi quo sint tenetur.</p>
                        </div>
                    </li>
                    <li class=\"mt-4 flex flex-row gap-y-5 p-4 rounded-lg transition cursor-pointer hover:bg-gray-100\">
                        <div class=\"relative flex flex-col rounded-xl w-1/5 overflow-hidden aspect-square border cursor-pointer transition hover:shadow-md bg-center bg-cover\" style=\"background-image: url('https://www.numerama.com/wp-content/uploads/2024/05/shawn-gus-psych.jpg')\">
                            <div class=\"absolute top-0 left-0 w-full h-full bg-black/10 flex items-center justify-center text-white hover:bg-black/60 transition opacity-10 hover:opacity-100\">
                                <svg class=\"h-12 w-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                    <title>play</title>
                                    <path d=\"M8,5.14V19.14L19,12.14L8,5.14Z\"/>
                                </svg>
                            </div>
                        </div>
                        <div class=\"flex items-start justify-center w-4/5 flex-col pl-8\">
                            <h2 class=\"font-bold text-xl\">Mort par un dino</h2>
                            <h3 class=\"font-medium text-lg text-black/70\">S4 - E02</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem exercitationem harum natus necessitatibus nesciunt.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class=\"mt-9\">
            <div class=\"max-w-3xl mx-auto\">
                <h2 class=\"text-lg font-medium text-black\">Vos <span class=\"font-bold text-red-600\">visionnages </span>
                </h2>
                <div class=\" font-medium mt-8 bg-gray-100 border border-black/10 rounded-lg px-8 py-4\">
                    <svg class=\"h-5 w-5 fill-current opacity-50 mr-2 inline-block\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <title>information</title>
                        <path d=\"M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\"/>
                    </svg>
                    Vous avez vu cette série <span class=\"text-red-600 font-bold\">43 fois</span> soit un total de
                    <span class=\"text-red-600 font-bold\">190 heures</span> de visionnage.
                    <a href=\"\" class=\"hover:text-red-600 underline decoration-red-400 decoration-2\">Voir l'historique</a>
                </div>
            </div>
        </section>
        <section class=\"mt-9\">
            <div class=\"max-w-3xl mx-auto\">
                <h2 class=\"text-lg font-medium text-black\"><span class=\"font-bold text-red-600\">Infos</span> du film</h2>
                <div class=\"flex items-center flex-wrap mt-9\">
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Saisons</b> 8</span>
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Date de sortie</b> 21 Octobre 2024</span>
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Notes</b> <span class=\"flex space-x-2 items-center text-xs\"><span>8.3</span><svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg></span></span>
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Langues</b> Français, Anglais, Italien</span>
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Sous-titre</b> Français, Anglais</span>
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Catégories</b> <a href=\"#\" class=\"hover:text-red-600 underline decoration-red-400 decoration-2\">Comédie</a></span>
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Bande annonce</b> <a href=\"#\" class=\"hover:text-red-600 underline decoration-red-400 decoration-2\">Youtube</a></span>
                </div>
            </div>
            <div class=\"max-w-3xl mx-auto mt-9\">
                <h2 class=\"text-lg font-medium text-black\">Résumé <span class=\"font-bold text-red-600\">rapide</span></h2>
                <p class=\"text-md mt-9\">Shawn Spencer, un homme drôle et futé, a développé durant son enfance un talent pour remarquer les moindres détails grâce à l'enseignement de son père Henry Spencer, un ancien policier.</p>
            </div>
            <div class=\"max-w-3xl mx-auto mt-9\">
                <h2 class=\"text-lg font-medium text-black\"><span class=\"font-bold text-red-600\">Équipe</span> du film</h2>
                <ul class=\"mt-9 grid grid-cols-2 sm:grid-cols-4 gap-x-5 gap-y-5\">
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md min-h-56\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Steve_Franks_by_Gage_Skidmore.jpg/440px-Steve_Franks_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">Steve Franks</span>
                                <span class=\"text-gray-100 text-xs\">Scénarise</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class=\"max-w-3xl mx-auto mt-9\">
                <h2 class=\"text-lg font-medium text-black\">Le <span class=\"font-bold text-red-600\">Casting</span></h2>
                <ul class=\"mt-9 grid grid-cols-2 sm:grid-cols-4 gap-x-5 gap-y-5\">
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/James_Roday_by_Gage_Skidmore.jpg/306px-James_Roday_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">James Roday</span>
                                <span class=\"text-gray-100 text-xs truncate\">Shawn Spencer</span>
                            </div>
                        </div>
                    </li>
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Dule_Hill_by_Gage_Skidmore.jpg/313px-Dule_Hill_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">Dulé Hill</span>
                                <span class=\"text-gray-100 text-xs truncate\">Burton « Gus » Guster</span>
                            </div>
                        </div>
                    </li>
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Timothy_Omundson_by_Gage_Skidmore.jpg/280px-Timothy_Omundson_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">Timothy Omundson</span>
                                <span class=\"text-gray-100 text-xs truncate\">Carlton J. Lassiter</span>
                            </div>
                        </div>
                    </li>
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Maggie_Lawson_by_Gage_Skidmore.jpg/294px-Maggie_Lawson_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">Maggie Lawson</span>
                                <span class=\"text-gray-100 text-xs truncate\">Juliet O'Hara</span>
                            </div>
                        </div>
                    </li>
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Kirsten_Nelson_by_Gage_Skidmore.jpg/295px-Kirsten_Nelson_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">Kirsten Nelson</span>
                                <span class=\"text-gray-100 text-xs truncate\">Cheffe Karen Vick</span>
                            </div>
                        </div>
                    </li>
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Corbin_Bernsen_by_Gage_Skidmore.jpg/314px-Corbin_Bernsen_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">Corbin Bernsen</span>
                                <span class=\"text-gray-100 text-xs truncate\">Henry Spencer</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class=\"max-w-3xl mx-auto mt-9\">
                <h2 class=\"text-lg font-medium text-black\">Résumé <span class=\"font-bold text-red-600\">détaillé</span></h2>
                <p class=\"text-md mt-9\">
                    Shawn Spencer, un homme drôle et futé, a développé durant son enfance un talent pour remarquer les moindres détails grâce à l'enseignement de son père Henry Spencer, un ancien policier.
                    <br><br>En grandissant, confronté à la dure réalité de l'emploi, ne parvenant pas à trouver un métier qui puisse lui plaire, il passe son temps à en changer et à donner des informations aux inspecteurs de police par l'intermédiaire d'appels téléphoniques. À partir de là s'ensuit un énorme quiproquo : le fait de fournir de nombreuses informations aux inspecteurs, poussent ces derniers à le suspecter de perpétrer lui-même ces crimes. N'ayant pas d'autre solution pour se sortir de cette situation, il prétend posséder des pouvoirs psychiques de médium.
                    <br><br>C'est ainsi qu'il devient consultant, en aidant les lieutenants Carlton Lassiter et Juliet O'Hara ainsi que leur chef Karen Vick, dans leurs enquêtes lorsqu'ils feront appel à lui pour certaines affaires apparemment insolubles ou pas assez importantes pour que la police s'en occupe, selon le cas. Dans ces enquêtes, il embarque son meilleur ami d'enfance, Burton « Gus » Guster et créent ensemble l'agence « Psych ». Ils vont alors tenter de résoudre chaque affaire en utilisant ses dons d'observation, camouflés en visions envoyées par des esprits. Gus est moins téméraire que Shawn et tous les deux se disputent souvent pour des détails pour le meilleur comme pour le pire…
            </div>
        </section>
        <section class=\"mt-9\">
            <div class=\"max-w-3xl mx-auto\">
                <h2 class=\"text-lg font-medium text-black\">Les <span class=\"font-bold text-red-600\">commentaires</span></h2>
                <ul class=\"space-y-4\">
                    <li class=\"mt-9\">
                        <div class=\"bg-gray-100 p-4 rounded-lg\">
                            <div class=\"flex items-center\">
                                <img src=\"https://random.imagecdn.app/100/100?a\" class=\"w-10 h-10 rounded-full\" alt=\"\">
                                <div class=\"ml-4 w-full\">
                                    <span class=\"font-medium\">John Doe</span>
                                    <span class=\"text-xs text-gray-500 flex items-center justify-between w-full\">
                                    <span>Il y a 2 jours</span>
                                    <span></span>
                                </span>
                                </div>
                            </div>
                            <p class=\"mt-4 w-full\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, consectetur deleniti deserunt ducimus harum iusto laboriosam minima nobis obcaecati odit officiis omnis quibusdam repellat repudiandae totam voluptas, voluptatem voluptatibus voluptatum.</p>
                        </div>
                    </li>
                    <li class=\"mt-9 pl-9 border-l-4\">
                        <div class=\"bg-gray-100 p-4 rounded-lg\">
                            <div class=\"flex items-center\">
                                <img src=\"https://random.imagecdn.app/100/100?b\" class=\"w-10 h-10 rounded-full\" alt=\"\">
                                <div class=\"ml-4 w-full\">
                                    <span class=\"font-medium\">Jane Doe</span>
                                    <span class=\"text-xs text-gray-500 flex items-center justify-between w-full\">
                                    <span>Il y a 4 heures</span>
                                    <span></span>
                                </span>
                                </div>
                            </div>
                            <p class=\"mt-4 w-full\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, consectetur deleniti deserunt ducimus harum iusto laboriosam minima nobis obcaecati.</p>
                        </div>
                    </li>
                    <li class=\"mt-9 pl-9 border-l-4\">
                        <div class=\"bg-gray-100 p-4 rounded-lg\">
                            <div class=\"flex items-center\">
                                <img src=\"https://random.imagecdn.app/100/100?c\" class=\"w-10 h-10 rounded-full\" alt=\"\">
                                <div class=\"ml-4 w-full\">
                                    <span class=\"font-medium\">Marco Doe</span>
                                    <span class=\"text-xs text-gray-500 flex items-center justify-between w-full\">
                                    <span>Il y a 1 heures</span>
                                    <span></span>
                                </span>
                                </div>
                            </div>
                            <p class=\"mt-4 w-full\">Lorem ipsum dolor sit amet !!</p>
                        </div>
                    </li>
                    <li class=\"mt-9 pl-9 border-l-4 relative cursor-not-allowed\">
                        <span class=\"absolute top-2 right-2 px-3 py-1 bg-orange-100 rounded-md\">En attente de vérification</span>
                        <div class=\"bg-gray-100 p-4 rounded-lg opacity-40\">
                            <div class=\"flex items-center\">
                                <img src=\"https://random.imagecdn.app/100/100?c\" class=\"w-10 h-10 rounded-full\" alt=\"\">
                                <div class=\"ml-4 w-full\">
                                    <span class=\"font-medium\">Harry Potter</span>
                                    <span class=\"text-xs text-gray-500 flex items-center justify-between w-full\">
                                    <span>Il y a 1O secondes</span>
                                    <span></span>
                                </span>
                                </div>
                            </div>
                            <p class=\"mt-4 w-full\">Lorem ipsum dolor sit amet !!</p>
                        </div>
                    </li>
                </ul>
                <form class=\"mt-9 bg-gray-100 p-4 rounded-lg\">
                    <h3 class=\"text-center text-md font-bold my-4\">Réagir / commenter le film ?</h3>
                    <div class=\"relative\">
                        <textarea rows=\"5\" class=\"w-full px-8 py-4 rounded-lg font-medium bg-white border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white\" placeholder=\"Votre commentaire\"></textarea>
                    </div>
                    <div class=\"flex items-center justify-center mt-2\">
                        <button class=\"relative flex bg-red-600 flex-row p-2 items-center justify-center rounded-md text-sm overflow-hidden border cursor-pointer transition text-white hover:opacity-90 hover:scale-105\">
                            <svg class=\"fill-current h-4 w-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\" /></svg>
                            Ajouter le commentaire
                        </button>
                    </div>
                    <div>
                        <span class=\"opacity-50 text-xs italic mt-4 block\">* Votre commentaire sera publié et visible par tous après avoir été analysé par notre système.</span>
                    </div>
                </form>
            </div>
        </section>
    </main>
</div>

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
        return "movie/detail_serie.html.twig";
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
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Détail d'une série</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \" >
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
                <svg class=\"h-5 w-5 fill-red-600 \" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" >
                    <path d=\"M5 22h14v0c1.1 0 2-.9 2-2v-9 0c0-.27-.11-.53-.29-.71l-8-8v0c-.4-.39-1.02-.39-1.41 0l-8 8h0c-.2.18-.3.44-.3.71v9 0c0 1.1.89 2 2 2Zm5-2v-5h4v5Zm-5-8.59l7-7 7 7V20h-3v-5 0c0-1.11-.9-2-2-2h-4v0c-1.11 0-2 .89-2 2v5H5Z\"></path>
                </svg>
                <span>Accueil</span>
            </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold\" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z\"></path>
                        <path d=\"M8 16l5.991-2 2-6 -6 2Z\"></path>
                    </g>
                </svg>
                <span>Découvrir</span>
            </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M12 2C6.48 2 2 6.48 2 12c0 5.51 4.48 10 10 10 5.51 0 10-4.49 10-10 0-5.52-4.49-10-10-10Zm0 18c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8 0 4.41-3.59 8-8 8Z\"></path>
                        <path d=\"M13 7h-2v5.414l3.29 3.29 1.41-1.42 -2.71-2.71Z\"></path>
                    </g>
                </svg>
                <span>Mes listes</span>
            </a>

            <div class=\"mt-8 text-gray-400/70  font-medium uppercase\">Social</div>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <path d=\"M12 2v0C9.23 2 7 4.23 7 7c0 2.76 2.23 5 5 5 2.76 0 5-2.24 5-5v0c0-2.77-2.24-5-5-5Zm0 8v0c-1.66 0-3-1.35-3-3 0-1.66 1.34-3 3-3 1.65 0 3 1.34 3 3v0c0 1.65-1.35 3-3 3Zm9 11v-1 0c0-3.87-3.14-7-7-7h-4v0c-3.87 0-7 3.13-7 7v1h2v-1 0c0-2.77 2.23-5 5-5h4v0c2.76 0 5 2.23 5 5v1Z\"></path>
                </svg>
                <span>Mon profil</span>
            </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M12 2v0C6.47 2 2 6.47 2 12c0 5.52 4.47 10 10 10 5.52 0 10-4.48 10-10v-.001c0-5.53-4.48-10-10-10Zm0 18v0c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8v0c0 4.41-3.59 8-8 8Z\"></path>
                        <path d=\"M12 8v0c-2.21 0-4 1.79-4 4 0 2.2 1.79 4 4 4 2.2 0 4-1.8 4-4v0c0-2.21-1.8-4-4-4Zm0 6v0c-1.11 0-2-.9-2-2 0-1.11.89-2 2-2 1.1 0 2 .89 2 2v0c0 1.1-.9 2-2 2Z\"></path>
                    </g>
                </svg>
                <span>Mes abonnements</span>
            </a>

            <div class=\"mt-8 text-gray-400/70  font-medium uppercase\">General</div>

            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold \" href=\"#\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 group-hover:stroke-red-600\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z\" />
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\" />
                </svg>
                <span>Paramètres</span>
            </a>
            <a class=\" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold\" href=\"#\">
                <svg class=\"h-5 w-5 group-hover:fill-red-600\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                    <g>
                        <path d=\"M16 13v-2H7V8l-5 4 5 4v-3Z\"></path>
                        <path d=\"M20 3h-9c-1.11 0-2 .89-2 2v4h2V5h9v14h-9v-4H9v4c0 1.1.89 2 2 2h9c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2Z\"></path>
                    </g>
                </svg>
                <span>Déconnexion</span>
            </a>

        </div><!-- /Menu -->

    </aside><!-- /Left Sidebar -->
    <main class=\" flex-1 py-10  px-5 sm:px-10 \">
        <header class=\" font-bold text-lg flex items-center gap-x-3 md:hidden mb-9\">
                <span class=\"mr-6\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\" />
                      </svg>
                </span>
            <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wideflex-1\">MMovie<span class=\"text-red-600\">.</span></div>
        </header>
        <section class=\"\">
            <h1 class=\"text-lg font-medium text-black\">Détails de <span class=\"font-bold text-red-600\">Psych, Enquêteur malgrés lui</span></h1>
            <div class=\"flex flex-col items-center mt-9\">
                <a class=\"relative flex w-full flex-row p-3 items-center justify-center rounded-lg overflow-hidden border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>repeat-variant</title><path d=\"M6,5.75L10.25,10H7V16H13.5L15.5,18H7A2,2 0 0,1 5,16V10H1.75L6,5.75M18,18.25L13.75,14H17V8H10.5L8.5,6H17A2,2 0 0,1 19,8V14H22.25L18,18.25Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-md\">Trouver un film <span class=\"text-red-600\">similaire</span> </span>
                </a>
            </div>
        </section>
        <section class=\"mt-9\">
            <div class=\"flex flex-col justify-between mt-4 bg-black/10 bg-blend-multiply h-96 overflow-hidden bg-cover bg-top px-7 pt-4 pb-6 text-white -ml-10 -mr-10 rounded-none\"
                 style=\"background-image: url('https://media.senscritique.com/media/000009609004/0/psych_enqueteur_malgre_lui.jpg');\" >
                <div class=\"flex -space-x-1 items-center \">
                    <img class=\"rounded-full w-7 h-7 shadow-lg border border-white\" src=\"https://random.imagecdn.app/100/100?a\" alt=\"\" srcset=\"\">
                    <img class=\"rounded-full w-7 h-7 shadow-lg border border-white\" src=\"https://random.imagecdn.app/100/100?b\" alt=\"\" srcset=\"\">
                    <img class=\"rounded-full w-7 h-7 shadow-lg border border-white\" src=\"https://random.imagecdn.app/100/100?c\" alt=\"\" srcset=\"\">
                    <span class=\"pl-4 text-xs drop-shadow-lg\">Recommandé par 12 amis</span>
                </div>
                <div class=\"bg-gradient-to-r from-black/40 to-transparent -mx-7 -mb-6 px-7 pb-6 pt-2\">
                    <span class=\"uppercase text-3xl font-semibold drop-shadow-lg \">Psych, Enquêteur malgrés lui - S01E02</span>
                    <div class=\"mt-4 flex items-center justify-between\">
                        <div class=\"flex space-x-3 items-center\">
                            <a href=\"#\" class=\"px-5 flex items-center justify-center py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block\">
                                <svg class=\"h-5 w-5 fill-current mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>play-box</title><path d=\"M19 3H5C3.89 3 3 3.89 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.89 20.1 3 19 3M10 16V8L15 12\" /></svg>
                                Reprendre la lecture
                            </a>
                            <a href=\"#\" class=\"px-5 flex items-center justify-center py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block\">
                                <svg class=\"h-5 w-5 fill-current mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>check-circle</title><path d=\"M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z\" /></svg>
                                Terminer
                            </a>
                            <a href=\"#\" class=\"px-5 flex items-center justify-center py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block\">
                                <svg class=\"h-5 w-5 fill-current mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>reload</title><path d=\"M2 12C2 16.97 6.03 21 11 21C13.39 21 15.68 20.06 17.4 18.4L15.9 16.9C14.63 18.25 12.86 19 11 19C4.76 19 1.64 11.46 6.05 7.05C10.46 2.64 18 5.77 18 12H15L19 16H19.1L23 12H20C20 7.03 15.97 3 11 3C6.03 3 2 7.03 2 12Z\" /></svg>
                                Recommencer depuis le début
                            </a>
                            <a href=\"#\" class=\"p-2.5 bg-gray-800/80 rounded-lg hover:bg-red-600\">
                                <svg class=\"h-4 w-4 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>dots-vertical</title><path d=\"M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z\" /></svg>
                            </a>
                        </div>
                        <div class=\"text-right space-x-1\">
                            <span class=\"bg-white/30 py-1 px-3 text-xxs rounded\">0h25 restants</span>
                            <span class=\"bg-white/30 py-1 px-3 text-xxs rounded\">12 visionnages</span>
                            <span class=\"bg-white/30 py-1 px-3 text-xxs rounded\">12 commentaires</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"mt-9\">
            <div class=\"max-w-3xl mx-auto\">
                <h2 class=\"text-lg font-medium text-black\">Les <span class=\"font-bold text-red-600\">épisodes</span></h2>
                <ul>
                    <li class=\"mt-4 flex flex-row gap-y-5 p-4 rounded-lg transition cursor-pointer hover:bg-gray-100\">
                        <div class=\"relative flex flex-col rounded-xl w-1/5 overflow-hidden aspect-square border cursor-pointer transition hover:shadow-md bg-center bg-cover\" style=\"background-image: url('https://www.numerama.com/wp-content/uploads/2024/05/psych-shawn-kate-gus.jpg')\">
                            <div class=\"absolute top-0 left-0 w-full h-full bg-black/10 flex items-center justify-center text-white hover:bg-black/60 transition opacity-10 hover:opacity-100\">
                                <svg class=\"h-12 w-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                    <title>play</title>
                                    <path d=\"M8,5.14V19.14L19,12.14L8,5.14Z\"/>
                                </svg>
                            </div>
                        </div>
                        <div class=\"flex items-start justify-center w-4/5 flex-col pl-8\">
                            <h2 class=\"font-bold text-xl\">Un médium de trop</h2>
                            <h3 class=\"font-medium text-lg text-black/70\">S4 - E01</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem exercitationem harum natus necessitatibus nesciunt provident quasi quo sint tenetur.</p>
                        </div>
                    </li>
                    <li class=\"mt-4 flex flex-row gap-y-5 p-4 rounded-lg transition cursor-pointer hover:bg-gray-100\">
                        <div class=\"relative flex flex-col rounded-xl w-1/5 overflow-hidden aspect-square border cursor-pointer transition hover:shadow-md bg-center bg-cover\" style=\"background-image: url('https://www.numerama.com/wp-content/uploads/2024/05/shawn-gus-psych.jpg')\">
                            <div class=\"absolute top-0 left-0 w-full h-full bg-black/10 flex items-center justify-center text-white hover:bg-black/60 transition opacity-10 hover:opacity-100\">
                                <svg class=\"h-12 w-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                    <title>play</title>
                                    <path d=\"M8,5.14V19.14L19,12.14L8,5.14Z\"/>
                                </svg>
                            </div>
                        </div>
                        <div class=\"flex items-start justify-center w-4/5 flex-col pl-8\">
                            <h2 class=\"font-bold text-xl\">Mort par un dino</h2>
                            <h3 class=\"font-medium text-lg text-black/70\">S4 - E02</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem exercitationem harum natus necessitatibus nesciunt.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class=\"mt-9\">
            <div class=\"max-w-3xl mx-auto\">
                <h2 class=\"text-lg font-medium text-black\">Vos <span class=\"font-bold text-red-600\">visionnages </span>
                </h2>
                <div class=\" font-medium mt-8 bg-gray-100 border border-black/10 rounded-lg px-8 py-4\">
                    <svg class=\"h-5 w-5 fill-current opacity-50 mr-2 inline-block\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <title>information</title>
                        <path d=\"M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\"/>
                    </svg>
                    Vous avez vu cette série <span class=\"text-red-600 font-bold\">43 fois</span> soit un total de
                    <span class=\"text-red-600 font-bold\">190 heures</span> de visionnage.
                    <a href=\"\" class=\"hover:text-red-600 underline decoration-red-400 decoration-2\">Voir l'historique</a>
                </div>
            </div>
        </section>
        <section class=\"mt-9\">
            <div class=\"max-w-3xl mx-auto\">
                <h2 class=\"text-lg font-medium text-black\"><span class=\"font-bold text-red-600\">Infos</span> du film</h2>
                <div class=\"flex items-center flex-wrap mt-9\">
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Saisons</b> 8</span>
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Date de sortie</b> 21 Octobre 2024</span>
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Notes</b> <span class=\"flex space-x-2 items-center text-xs\"><span>8.3</span><svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg></span></span>
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Langues</b> Français, Anglais, Italien</span>
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Sous-titre</b> Français, Anglais</span>
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Catégories</b> <a href=\"#\" class=\"hover:text-red-600 underline decoration-red-400 decoration-2\">Comédie</a></span>
                    <span class=\"flex bg-black/10 m-0.5 px-1 py-0.5 rounded\"><b class=\"mr-2\">Bande annonce</b> <a href=\"#\" class=\"hover:text-red-600 underline decoration-red-400 decoration-2\">Youtube</a></span>
                </div>
            </div>
            <div class=\"max-w-3xl mx-auto mt-9\">
                <h2 class=\"text-lg font-medium text-black\">Résumé <span class=\"font-bold text-red-600\">rapide</span></h2>
                <p class=\"text-md mt-9\">Shawn Spencer, un homme drôle et futé, a développé durant son enfance un talent pour remarquer les moindres détails grâce à l'enseignement de son père Henry Spencer, un ancien policier.</p>
            </div>
            <div class=\"max-w-3xl mx-auto mt-9\">
                <h2 class=\"text-lg font-medium text-black\"><span class=\"font-bold text-red-600\">Équipe</span> du film</h2>
                <ul class=\"mt-9 grid grid-cols-2 sm:grid-cols-4 gap-x-5 gap-y-5\">
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md min-h-56\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Steve_Franks_by_Gage_Skidmore.jpg/440px-Steve_Franks_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">Steve Franks</span>
                                <span class=\"text-gray-100 text-xs\">Scénarise</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class=\"max-w-3xl mx-auto mt-9\">
                <h2 class=\"text-lg font-medium text-black\">Le <span class=\"font-bold text-red-600\">Casting</span></h2>
                <ul class=\"mt-9 grid grid-cols-2 sm:grid-cols-4 gap-x-5 gap-y-5\">
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/James_Roday_by_Gage_Skidmore.jpg/306px-James_Roday_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">James Roday</span>
                                <span class=\"text-gray-100 text-xs truncate\">Shawn Spencer</span>
                            </div>
                        </div>
                    </li>
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Dule_Hill_by_Gage_Skidmore.jpg/313px-Dule_Hill_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">Dulé Hill</span>
                                <span class=\"text-gray-100 text-xs truncate\">Burton « Gus » Guster</span>
                            </div>
                        </div>
                    </li>
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Timothy_Omundson_by_Gage_Skidmore.jpg/280px-Timothy_Omundson_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">Timothy Omundson</span>
                                <span class=\"text-gray-100 text-xs truncate\">Carlton J. Lassiter</span>
                            </div>
                        </div>
                    </li>
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Maggie_Lawson_by_Gage_Skidmore.jpg/294px-Maggie_Lawson_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">Maggie Lawson</span>
                                <span class=\"text-gray-100 text-xs truncate\">Juliet O'Hara</span>
                            </div>
                        </div>
                    </li>
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Kirsten_Nelson_by_Gage_Skidmore.jpg/295px-Kirsten_Nelson_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">Kirsten Nelson</span>
                                <span class=\"text-gray-100 text-xs truncate\">Cheffe Karen Vick</span>
                            </div>
                        </div>
                    </li>
                    <li class=\"relative rounded-xl overflow-hidden transition cursor-pointer hover:scale-105 hover:opacity-90 hover:shadow-md\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Corbin_Bernsen_by_Gage_Skidmore.jpg/314px-Corbin_Bernsen_by_Gage_Skidmore.jpg\" class=\"object-cover h-full w-full -z-10\" alt=\"\">
                        <div class=\"absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end\">
                            <div class=\"self-center flex flex-col items-center space-y-2\">
                                <span class=\"capitalize text-white font-medium drop-shadow-md\">Corbin Bernsen</span>
                                <span class=\"text-gray-100 text-xs truncate\">Henry Spencer</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class=\"max-w-3xl mx-auto mt-9\">
                <h2 class=\"text-lg font-medium text-black\">Résumé <span class=\"font-bold text-red-600\">détaillé</span></h2>
                <p class=\"text-md mt-9\">
                    Shawn Spencer, un homme drôle et futé, a développé durant son enfance un talent pour remarquer les moindres détails grâce à l'enseignement de son père Henry Spencer, un ancien policier.
                    <br><br>En grandissant, confronté à la dure réalité de l'emploi, ne parvenant pas à trouver un métier qui puisse lui plaire, il passe son temps à en changer et à donner des informations aux inspecteurs de police par l'intermédiaire d'appels téléphoniques. À partir de là s'ensuit un énorme quiproquo : le fait de fournir de nombreuses informations aux inspecteurs, poussent ces derniers à le suspecter de perpétrer lui-même ces crimes. N'ayant pas d'autre solution pour se sortir de cette situation, il prétend posséder des pouvoirs psychiques de médium.
                    <br><br>C'est ainsi qu'il devient consultant, en aidant les lieutenants Carlton Lassiter et Juliet O'Hara ainsi que leur chef Karen Vick, dans leurs enquêtes lorsqu'ils feront appel à lui pour certaines affaires apparemment insolubles ou pas assez importantes pour que la police s'en occupe, selon le cas. Dans ces enquêtes, il embarque son meilleur ami d'enfance, Burton « Gus » Guster et créent ensemble l'agence « Psych ». Ils vont alors tenter de résoudre chaque affaire en utilisant ses dons d'observation, camouflés en visions envoyées par des esprits. Gus est moins téméraire que Shawn et tous les deux se disputent souvent pour des détails pour le meilleur comme pour le pire…
            </div>
        </section>
        <section class=\"mt-9\">
            <div class=\"max-w-3xl mx-auto\">
                <h2 class=\"text-lg font-medium text-black\">Les <span class=\"font-bold text-red-600\">commentaires</span></h2>
                <ul class=\"space-y-4\">
                    <li class=\"mt-9\">
                        <div class=\"bg-gray-100 p-4 rounded-lg\">
                            <div class=\"flex items-center\">
                                <img src=\"https://random.imagecdn.app/100/100?a\" class=\"w-10 h-10 rounded-full\" alt=\"\">
                                <div class=\"ml-4 w-full\">
                                    <span class=\"font-medium\">John Doe</span>
                                    <span class=\"text-xs text-gray-500 flex items-center justify-between w-full\">
                                    <span>Il y a 2 jours</span>
                                    <span></span>
                                </span>
                                </div>
                            </div>
                            <p class=\"mt-4 w-full\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, consectetur deleniti deserunt ducimus harum iusto laboriosam minima nobis obcaecati odit officiis omnis quibusdam repellat repudiandae totam voluptas, voluptatem voluptatibus voluptatum.</p>
                        </div>
                    </li>
                    <li class=\"mt-9 pl-9 border-l-4\">
                        <div class=\"bg-gray-100 p-4 rounded-lg\">
                            <div class=\"flex items-center\">
                                <img src=\"https://random.imagecdn.app/100/100?b\" class=\"w-10 h-10 rounded-full\" alt=\"\">
                                <div class=\"ml-4 w-full\">
                                    <span class=\"font-medium\">Jane Doe</span>
                                    <span class=\"text-xs text-gray-500 flex items-center justify-between w-full\">
                                    <span>Il y a 4 heures</span>
                                    <span></span>
                                </span>
                                </div>
                            </div>
                            <p class=\"mt-4 w-full\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, consectetur deleniti deserunt ducimus harum iusto laboriosam minima nobis obcaecati.</p>
                        </div>
                    </li>
                    <li class=\"mt-9 pl-9 border-l-4\">
                        <div class=\"bg-gray-100 p-4 rounded-lg\">
                            <div class=\"flex items-center\">
                                <img src=\"https://random.imagecdn.app/100/100?c\" class=\"w-10 h-10 rounded-full\" alt=\"\">
                                <div class=\"ml-4 w-full\">
                                    <span class=\"font-medium\">Marco Doe</span>
                                    <span class=\"text-xs text-gray-500 flex items-center justify-between w-full\">
                                    <span>Il y a 1 heures</span>
                                    <span></span>
                                </span>
                                </div>
                            </div>
                            <p class=\"mt-4 w-full\">Lorem ipsum dolor sit amet !!</p>
                        </div>
                    </li>
                    <li class=\"mt-9 pl-9 border-l-4 relative cursor-not-allowed\">
                        <span class=\"absolute top-2 right-2 px-3 py-1 bg-orange-100 rounded-md\">En attente de vérification</span>
                        <div class=\"bg-gray-100 p-4 rounded-lg opacity-40\">
                            <div class=\"flex items-center\">
                                <img src=\"https://random.imagecdn.app/100/100?c\" class=\"w-10 h-10 rounded-full\" alt=\"\">
                                <div class=\"ml-4 w-full\">
                                    <span class=\"font-medium\">Harry Potter</span>
                                    <span class=\"text-xs text-gray-500 flex items-center justify-between w-full\">
                                    <span>Il y a 1O secondes</span>
                                    <span></span>
                                </span>
                                </div>
                            </div>
                            <p class=\"mt-4 w-full\">Lorem ipsum dolor sit amet !!</p>
                        </div>
                    </li>
                </ul>
                <form class=\"mt-9 bg-gray-100 p-4 rounded-lg\">
                    <h3 class=\"text-center text-md font-bold my-4\">Réagir / commenter le film ?</h3>
                    <div class=\"relative\">
                        <textarea rows=\"5\" class=\"w-full px-8 py-4 rounded-lg font-medium bg-white border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white\" placeholder=\"Votre commentaire\"></textarea>
                    </div>
                    <div class=\"flex items-center justify-center mt-2\">
                        <button class=\"relative flex bg-red-600 flex-row p-2 items-center justify-center rounded-md text-sm overflow-hidden border cursor-pointer transition text-white hover:opacity-90 hover:scale-105\">
                            <svg class=\"fill-current h-4 w-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\" /></svg>
                            Ajouter le commentaire
                        </button>
                    </div>
                    <div>
                        <span class=\"opacity-50 text-xs italic mt-4 block\">* Votre commentaire sera publié et visible par tous après avoir été analysé par notre système.</span>
                    </div>
                </form>
            </div>
        </section>
    </main>
</div>

</body>

</html>
", "movie/detail_serie.html.twig", "C:\\Users\\aitou\\OneDrive\\Bureau\\esgi_cours\\symfony\\cours-symfony-main\\streemi\\templates\\movie\\detail_serie.html.twig");
    }
}