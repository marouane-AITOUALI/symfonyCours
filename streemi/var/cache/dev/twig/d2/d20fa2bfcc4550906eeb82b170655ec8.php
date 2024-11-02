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

/* admin/admin_users.html.twig */
class __TwigTemplate_44e169bbbaa7fbc7b2a1f08d6f064218 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_users.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Admin - Gérer les utilisateurs</title>
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
            <h1 class=\"text-lg font-medium text-black mb-9\">Administration
                <span class=\"font-bold text-red-600\">des utilisateurs</span></h1>
            <button class=\"flex flex-col items-center mt-9 w-full\">
                <div class=\"relative flex w-full bg-red-600 flex-row p-3 items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition hover:bg-red-700 text-white\">
                    <span class=\"font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\"/></svg>
                    </span> <span class=\"capitalize font-medium text-md\">Ajouter un utilisateur</span>
                </div>
            </button>
        </section>
        <section class=\"mt-9\">

            <div class=\"flex flex-col\">
                <div class=\" overflow-x-auto pb-4\">
                    <div class=\"min-w-full inline-block align-middle\">
                        <div class=\"mb-9\">
                            <label class=\"mx-auto mt-8 relative bg-white flex flex-col md:flex-row items-center justify-center border border-gray-300 py-2 px-2 rounded-xl gap-2\" for=\"search-bar\">
                                <input id=\"search-bar\" placeholder=\"Nom, Prénom, Adresse Email, Numéro de téléphone ...\" name=\"q\" class=\"px-3 py-1 w-full rounded-md flex-1 outline-none bg-white\" required=\"\">
                                <button type=\"submit\" class=\"w-full md:w-auto px-3 py-1.5 bg-red-600 border-red-600 hover:bg-red-700 text-white fill-white duration-100 border border-gray-300 overflow-hidden relative rounded-lg text-md transition\">
                                    <div class=\"flex items-center transition-all opacity-1\">
                                        <span class=\"text-sm font-semibold whitespace-nowrap truncate mx-auto\">
                                            Rechercher
                                        </span>
                                    </div>
                                </button>
                            </label>
                        </div>

                        <div class=\"overflow-hidden  border rounded-lg border-gray-300\">
                            <table class=\"table-auto min-w-full rounded-xl\">
                                <thead>
                                <tr class=\"bg-gray-50\">
                                    <th class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> ID</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize min-w-[350px]\"> Nom &amp; Email</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> Date d'inscription</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> Status</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> Actions</th>
                                </tr>
                                </thead>
                                <tbody class=\"divide-y divide-gray-300 \">
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536419.png\" alt=\"Floyd image\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Floyd Miles</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400\"> floydmiles@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Jun. 24, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-emerald-50 rounded-full flex justify-center w-20 items-center gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#059669\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-emerald-600 \">Actif</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010511</td>
                                    <td class=\"w-48 px-5 py-3\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536435.png\" alt=\"Savannah image\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Savannah Nguyen</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400\"> savannahng@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Feb. 23, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-red-50 rounded-full flex w-20 justify-center items-center gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#DC2626\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-red-600 \">Bloqué</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010512</td>
                                    <td class=\"w-48 px-5 py-3 whitespace-nowrap\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536451.png\" alt=\"Cameron image\">
                                            <div class=\"data min-w-[150px]\">
                                                <p class=\"font-normal text-sm text-gray-900 whitespace-nowrap\">Cameron Williamson</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400 whitespace-nowrap\"> cameron@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Oct. 23, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-amber-50 rounded-full flex items-center justify-center w-20 gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#D97706\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-amber-600 \">Attente</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010513</td>
                                    <td class=\"w-48 px-5 py-3\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536466.png\" alt=\"Darrell image\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Darrell Steward</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400\"> darrellstew@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Jul. 12, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-red-50 rounded-full flex items-center w-20 justify-center gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#DC2626\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-red-600 \">Bloqué</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010514</td>
                                    <td class=\"w-48 px-5 py-3\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536479.png\" alt=\"Laura image\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Laura Bran</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400\"> laurabran@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Sep. 29, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-emerald-50 rounded-full flex justify-center w-20 items-center gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#059669\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-emerald-600 \">Actif</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010515</td>
                                    <td class=\"w-48 px-5 py-3\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536494.png\" alt=\"Alfred image\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Alfred Frook</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400\"> alfredfrook@pagedone.io</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Dec. 02, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-emerald-50 rounded-full flex justify-center w-20 items-center gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#059669\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-emerald-600 \">Actif</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010516</td>
                                    <td class=\"w-48 px-5 py-3 whitespace-nowrap\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536512.png\" alt=\"Claire image\">
                                            <div class=\"data min-w-[150px]\">
                                                <p class=\"font-normal text-sm text-gray-900 whitespace-nowrap\">Claire Tran </p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400 whitespace-nowrap\"> clairetran@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Jan. 09, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-amber-50 rounded-full flex items-center justify-center w-20 gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#D97706\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-amber-600 \">Attente</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010517</td>
                                    <td class=\"w-48 px-5 py-3\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536525.png\" alt=\"Sam image\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Sam John</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400\"> samjohn@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Mar. 15, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-red-50 rounded-full flex w-20 justify-center items-center gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#DC2626\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-red-600 \">Bloqué</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010518</td>
                                    <td class=\"w-48 px-5 py-3 whitespace-nowrap\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536552.png\" alt=\"Richard image\">
                                            <div class=\"data min-w-[150px]\">
                                                <p class=\"font-normal text-sm text-gray-900 whitespace-nowrap\">Richard Riccio </p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400 whitespace-nowrap\"> richardriccio@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Apr. 02, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-amber-50 rounded-full flex items-center justify-center w-20 gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#D97706\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-amber-600 \">Attente</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"flex justify-center items-center mt-9\">
                            <nav class=\"flex items-center justify-between\">
                                <div class=\"flex-1 items-center grid grid-cols-3\">
                                    <div class=\"flex items-center\">
                                        <div class=\"pl-2 text-sm font-medium\">
                                            Affichage de <span class=\"text-red-600\">10</span> éléments sur <span class=\"text-red-600\">40</span>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-center\">
                                        <div class=\"flex items-center space-x-2\">
                                            <label>
                                                <select class=\"h-8 text-sm pr-8 leading-none transition duration-75 border-gray-300 rounded-lg shadow-sm outline-none focus:border-red-500 focus:ring-1 focus:ring-inset focus:ring-red-500\">
                                                    <option value=\"5\">5</option>
                                                    <option value=\"10\">10</option>
                                                    <option value=\"25\">25</option>
                                                    <option value=\"50\">50</option>
                                                    <option value=\"-1\">All</option>
                                                </select>
                                                <span class=\"text-sm font-medium\">per page</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-end\">
                                        <div class=\"py-3 border rounded-lg\">
                                            <ol class=\"flex items-center text-sm text-gray-500 divide-x divide-gray-300\">
                                                <li>
                                                    <button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 transition text-red-600\" aria-label=\"Previous\" rel=\"prev\">
                                                        <svg class=\"w-5 h-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                                            <path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\"></path>
                                                        </svg>
                                                    </button>
                                                </li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>1</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none transition text-red-600 filament-tables-pagination-item-active focus:underline bg-red-500/10 ring-2 ring-red-500\"><span>2</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>3</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>4</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>5</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>6</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>...</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>9</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>10</span></button></li>
                                                <li>
                                                    <button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 transition text-red-600\" aria-label=\"Next\" rel=\"next\">
                                                        <svg class=\"w-5 h-5 rtl:scale-x-[-1]\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                                            <path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\"></path>
                                                        </svg>
                                                    </button>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
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
        return "admin/admin_users.html.twig";
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
    <title>Streemi - Admin - Gérer les utilisateurs</title>
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
            <h1 class=\"text-lg font-medium text-black mb-9\">Administration
                <span class=\"font-bold text-red-600\">des utilisateurs</span></h1>
            <button class=\"flex flex-col items-center mt-9 w-full\">
                <div class=\"relative flex w-full bg-red-600 flex-row p-3 items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition hover:bg-red-700 text-white\">
                    <span class=\"font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\"/></svg>
                    </span> <span class=\"capitalize font-medium text-md\">Ajouter un utilisateur</span>
                </div>
            </button>
        </section>
        <section class=\"mt-9\">

            <div class=\"flex flex-col\">
                <div class=\" overflow-x-auto pb-4\">
                    <div class=\"min-w-full inline-block align-middle\">
                        <div class=\"mb-9\">
                            <label class=\"mx-auto mt-8 relative bg-white flex flex-col md:flex-row items-center justify-center border border-gray-300 py-2 px-2 rounded-xl gap-2\" for=\"search-bar\">
                                <input id=\"search-bar\" placeholder=\"Nom, Prénom, Adresse Email, Numéro de téléphone ...\" name=\"q\" class=\"px-3 py-1 w-full rounded-md flex-1 outline-none bg-white\" required=\"\">
                                <button type=\"submit\" class=\"w-full md:w-auto px-3 py-1.5 bg-red-600 border-red-600 hover:bg-red-700 text-white fill-white duration-100 border border-gray-300 overflow-hidden relative rounded-lg text-md transition\">
                                    <div class=\"flex items-center transition-all opacity-1\">
                                        <span class=\"text-sm font-semibold whitespace-nowrap truncate mx-auto\">
                                            Rechercher
                                        </span>
                                    </div>
                                </button>
                            </label>
                        </div>

                        <div class=\"overflow-hidden  border rounded-lg border-gray-300\">
                            <table class=\"table-auto min-w-full rounded-xl\">
                                <thead>
                                <tr class=\"bg-gray-50\">
                                    <th class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> ID</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize min-w-[350px]\"> Nom &amp; Email</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> Date d'inscription</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> Status</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> Actions</th>
                                </tr>
                                </thead>
                                <tbody class=\"divide-y divide-gray-300 \">
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536419.png\" alt=\"Floyd image\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Floyd Miles</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400\"> floydmiles@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Jun. 24, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-emerald-50 rounded-full flex justify-center w-20 items-center gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#059669\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-emerald-600 \">Actif</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010511</td>
                                    <td class=\"w-48 px-5 py-3\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536435.png\" alt=\"Savannah image\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Savannah Nguyen</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400\"> savannahng@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Feb. 23, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-red-50 rounded-full flex w-20 justify-center items-center gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#DC2626\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-red-600 \">Bloqué</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010512</td>
                                    <td class=\"w-48 px-5 py-3 whitespace-nowrap\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536451.png\" alt=\"Cameron image\">
                                            <div class=\"data min-w-[150px]\">
                                                <p class=\"font-normal text-sm text-gray-900 whitespace-nowrap\">Cameron Williamson</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400 whitespace-nowrap\"> cameron@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Oct. 23, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-amber-50 rounded-full flex items-center justify-center w-20 gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#D97706\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-amber-600 \">Attente</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010513</td>
                                    <td class=\"w-48 px-5 py-3\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536466.png\" alt=\"Darrell image\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Darrell Steward</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400\"> darrellstew@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Jul. 12, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-red-50 rounded-full flex items-center w-20 justify-center gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#DC2626\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-red-600 \">Bloqué</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010514</td>
                                    <td class=\"w-48 px-5 py-3\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536479.png\" alt=\"Laura image\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Laura Bran</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400\"> laurabran@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Sep. 29, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-emerald-50 rounded-full flex justify-center w-20 items-center gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#059669\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-emerald-600 \">Actif</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010515</td>
                                    <td class=\"w-48 px-5 py-3\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536494.png\" alt=\"Alfred image\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Alfred Frook</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400\"> alfredfrook@pagedone.io</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Dec. 02, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-emerald-50 rounded-full flex justify-center w-20 items-center gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#059669\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-emerald-600 \">Actif</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010516</td>
                                    <td class=\"w-48 px-5 py-3 whitespace-nowrap\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536512.png\" alt=\"Claire image\">
                                            <div class=\"data min-w-[150px]\">
                                                <p class=\"font-normal text-sm text-gray-900 whitespace-nowrap\">Claire Tran </p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400 whitespace-nowrap\"> clairetran@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Jan. 09, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-amber-50 rounded-full flex items-center justify-center w-20 gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#D97706\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-amber-600 \">Attente</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010517</td>
                                    <td class=\"w-48 px-5 py-3\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536525.png\" alt=\"Sam image\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Sam John</p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400\"> samjohn@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Mar. 15, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-red-50 rounded-full flex w-20 justify-center items-center gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#DC2626\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-red-600 \">Bloqué</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010518</td>
                                    <td class=\"w-48 px-5 py-3 whitespace-nowrap\">
                                        <div class=\"flex items-center gap-3\">
                                            <img src=\"https://pagedone.io/asset/uploads/1697536552.png\" alt=\"Richard image\">
                                            <div class=\"data min-w-[150px]\">
                                                <p class=\"font-normal text-sm text-gray-900 whitespace-nowrap\">Richard Riccio </p>
                                                <p class=\"font-normal text-xs leading-5 text-gray-400 whitespace-nowrap\"> richardriccio@pagedone.io </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> Apr. 02, 2023</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-amber-50 rounded-full flex items-center justify-center w-20 gap-1\">
                                            <svg width=\"5\" height=\"6\" viewBox=\"0 0 5 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <circle cx=\"2.5\" cy=\"3\" r=\"2.5\" fill=\"#D97706\"></circle>
                                            </svg>
                                            <span class=\"font-medium text-xs text-amber-600 \">Attente</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"flex justify-center items-center mt-9\">
                            <nav class=\"flex items-center justify-between\">
                                <div class=\"flex-1 items-center grid grid-cols-3\">
                                    <div class=\"flex items-center\">
                                        <div class=\"pl-2 text-sm font-medium\">
                                            Affichage de <span class=\"text-red-600\">10</span> éléments sur <span class=\"text-red-600\">40</span>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-center\">
                                        <div class=\"flex items-center space-x-2\">
                                            <label>
                                                <select class=\"h-8 text-sm pr-8 leading-none transition duration-75 border-gray-300 rounded-lg shadow-sm outline-none focus:border-red-500 focus:ring-1 focus:ring-inset focus:ring-red-500\">
                                                    <option value=\"5\">5</option>
                                                    <option value=\"10\">10</option>
                                                    <option value=\"25\">25</option>
                                                    <option value=\"50\">50</option>
                                                    <option value=\"-1\">All</option>
                                                </select>
                                                <span class=\"text-sm font-medium\">per page</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-end\">
                                        <div class=\"py-3 border rounded-lg\">
                                            <ol class=\"flex items-center text-sm text-gray-500 divide-x divide-gray-300\">
                                                <li>
                                                    <button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 transition text-red-600\" aria-label=\"Previous\" rel=\"prev\">
                                                        <svg class=\"w-5 h-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                                            <path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\"></path>
                                                        </svg>
                                                    </button>
                                                </li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>1</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none transition text-red-600 filament-tables-pagination-item-active focus:underline bg-red-500/10 ring-2 ring-red-500\"><span>2</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>3</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>4</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>5</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>6</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>...</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>9</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>10</span></button></li>
                                                <li>
                                                    <button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 transition text-red-600\" aria-label=\"Next\" rel=\"next\">
                                                        <svg class=\"w-5 h-5 rtl:scale-x-[-1]\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                                            <path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\"></path>
                                                        </svg>
                                                    </button>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
</div>

</body>

</html>
", "admin/admin_users.html.twig", "C:\\Users\\aitou\\OneDrive\\Bureau\\esgi_cours\\symfony\\cours-symfony-main\\streemi\\templates\\admin\\admin_users.html.twig");
    }
}