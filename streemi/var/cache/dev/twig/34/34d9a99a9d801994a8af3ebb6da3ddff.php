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

/* other/discover.html.twig */
class __TwigTemplate_e32f918d3d02ab54dec321f659337237 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "other/discover.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Découvrir</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \" >
<div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">

    ";
        // line 16
        yield from         $this->loadTemplate("parts/left-menu.html.twig", "other/discover.html.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "
    <main class=\" flex-1 py-10  px-5 sm:px-10 \">

        <header class=\" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 \">
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

        <section>
            <nav class=\"flex space-x-6 text-gray-400 font-medium\">
                <a href=\"#\" class=\"hover:text-gray-700\">Séries</a>
                <a href=\"#\" class=\"text-gray-700 font-semibold\">Films</a>
                <a href=\"#\" class=\"hover:text-gray-700 \">Animés</a>
            </nav>

            <div class=\"flex flex-col items-center mt-9\">
                <a class=\"relative flex w-full flex-row p-3 items-center justify-center rounded-lg overflow-hidden border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>repeat-variant</title><path d=\"M6,5.75L10.25,10H7V16H13.5L15.5,18H7A2,2 0 0,1 5,16V10H1.75L6,5.75M18,18.25L13.75,14H17V8H10.5L8.5,6H17A2,2 0 0,1 19,8V14H22.25L18,18.25Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-md\">Trouver un <span class=\"text-red-600\">film</span> aléatoirement</span>
                </a>
            </div>
        </section>

        <section class=\"mt-9\">
            <div class=\"flex items-center justify-between\">
                <span class=\"font-semibold text-gray-700 text-base\">Nos recommandations</span>
                <div class=\"flex items-center space-x-2 fill-gray-500\">
                    <svg class=\"h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 fill-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z\"></path>
                    </svg>
                    <svg class=\"h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 fill-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z\"></path>
                    </svg>
                </div>
            </div>

            <div class=\"mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5 \">
                <div class=\"relative flex flex-col rounded-xl overflow-hidden aspect-square border\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://upload.wikimedia.org/wikipedia/en/1/14/Tenet_movie_poster.jpg\" class=\" h-4/5 object-cover w-full  \" alt=\"\">
                    <div class=\"w-full h-1/5 bg-white px-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium truncate\"><span class=\"text-red-600 font-bold\">#1</span> - Tenet</span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </div>
                <div class=\"relative flex flex-col rounded-xl overflow-hidden aspect-square border\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end absolute top-2 right-2 bg-red-600/80\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 24 24\" fill=\"currentColor\"><path d=\"M9,20.42L2.79,14.21L5.62,11.38L9,14.77L18.88,4.88L21.71,7.71L9,20.42Z\" /></svg>
                    </a>
                    <img src=\"https://upload.wikimedia.org/wikipedia/en/f/fc/Fight_Club_poster.jpg\" class=\" h-4/5 object-cover w-full  \" alt=\"\">
                    <div class=\"w-full h-1/5 bg-white px-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium truncate\"><span class=\"text-red-600 font-bold\">#2</span> - Fight Club</span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>8.8</span>
                        </div>
                    </div>
                </div>
                <div class=\"relative flex flex-col rounded-xl overflow-hidden aspect-square border\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://upload.wikimedia.org/wikipedia/en/8/8e/Dune_%282021_film%29.jpg\" class=\" h-4/5 object-cover w-full  \" alt=\"\">
                    <div class=\"w-full h-1/5 bg-white px-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium truncate\"><span class=\"text-red-600 font-bold\">#3</span> - Dune</span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>8.1</span>
                        </div>
                    </div>
                </div>



            </div>
        </section>

        <section class=\"mt-9\">
            <div class=\"flex items-center justify-between\">
                <span class=\"font-semibold text-gray-700 text-base\">Recommandations par catégories</span>
            </div>

            <div class=\"mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5\">
                <a class=\"relative flex flex-row items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg class=\"h-8 w-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M16.5,5.5A2,2 0 0,0 18.5,3.5A2,2 0 0,0 16.5,1.5A2,2 0 0,0 14.5,3.5A2,2 0 0,0 16.5,5.5M12.9,19.4L13.9,15L16,17V23H18V15.5L15.9,13.5L16.5,10.5C17.89,12.09 19.89,13 22,13V11C20.24,11.03 18.6,10.11 17.7,8.6L16.7,7C16.34,6.4 15.7,6 15,6C14.7,6 14.5,6.1 14.2,6.1L9,8.3V13H11V9.6L12.8,8.9L11.2,17L6.3,16L5.9,18L12.9,19.4M4,9A1,1 0 0,1 3,8A1,1 0 0,1 4,7H7V9H4M5,5A1,1 0 0,1 4,4A1,1 0 0,1 5,3H10V5H5M3,13A1,1 0 0,1 2,12A1,1 0 0,1 3,11H7V13H3Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Action</span>
                </a>
                <a class=\"relative flex flex-row items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg class=\"h-8 w-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>island</title><path d=\"M20 20C18.61 20 17.22 19.53 16 18.67C13.56 20.38 10.44 20.38 8 18.67C6.78 19.53 5.39 20 4 20H2V22H4C5.37 22 6.74 21.65 8 21C10.5 22.3 13.5 22.3 16 21C17.26 21.65 18.62 22 20 22H22V20H20M20.78 19H20C18.82 19 17.64 18.6 16.58 17.85L16 17.45L15.42 17.85C14.39 18.57 13.21 18.95 12 18.95C10.77 18.95 9.59 18.57 8.56 17.85L8 17.45L7.43 17.85C6.36 18.6 5.18 19 4 19H3.22C3.75 17.54 5.58 15 12 15C14 15 15 15.24 15 15.24C15.68 13.87 16.83 10.77 16 6.82L17.06 7.53C17.39 8.96 18 11.75 16.8 15.65C19.43 16.5 20.42 18 20.78 19M22 7.59C21.21 6.5 20 5.71 18.58 5.53C18.7 5.67 18.81 5.83 18.92 6C20.12 7.91 19.87 10.32 18.47 11.95C19.06 10.5 19 8.79 18.08 7.36C18 7.28 17.96 7.2 17.9 7.11C17.5 6.53 16.96 6.06 16.38 5.72C14.35 6.37 12.88 8.27 12.88 10.5C12.88 11.03 12.96 11.53 13.1 12C12.5 11.17 12.16 10.17 12.16 9.07C12.16 7.41 12.96 5.95 14.2 5.03C13.16 4.95 12.09 5.18 11.14 5.78C10.7 6.05 10.32 6.38 10 6.76C10.39 5.82 11.05 5 12 4.4C13.04 3.74 14.25 3.5 15.39 3.69C15.1 3.29 14.75 2.92 14.33 2.6C13.92 2.29 13.47 2.05 13 1.88C14 1.91 15.04 2.24 15.91 2.89C16.35 3.22 16.7 3.62 17 4.05C17.06 4.05 17.12 4.04 17.19 4.04C19.45 4.04 21.37 5.53 22 7.59Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Aventure</span>
                </a>
                <a class=\"relative flex flex-row items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg  class=\"h-8 w-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>emoticon</title><path d=\"M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M15.5,8A1.5,1.5 0 0,1 17,9.5A1.5,1.5 0 0,1 15.5,11A1.5,1.5 0 0,1 14,9.5A1.5,1.5 0 0,1 15.5,8M8.5,8A1.5,1.5 0 0,1 10,9.5A1.5,1.5 0 0,1 8.5,11A1.5,1.5 0 0,1 7,9.5A1.5,1.5 0 0,1 8.5,8M12,17.5C9.67,17.5 7.69,16.04 6.89,14H17.11C16.3,16.04 14.33,17.5 12,17.5Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Comédie</span>
                </a>
                <a class=\"relative flex flex-row items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg class=\"h-8 w-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>alien</title><path d=\"M12,3C16.97,3 21,6.58 21,11C21,15.42 15,21 12,21C9,21 3,15.42 3,11C3,6.58 7.03,3 12,3M10.31,10.93C9.29,9.29 7.47,8.58 6.25,9.34C5.03,10.1 4.87,12.05 5.89,13.69C6.92,15.33 8.74,16.04 9.96,15.28C11.18,14.5 11.33,12.57 10.31,10.93M13.69,10.93C12.67,12.57 12.82,14.5 14.04,15.28C15.26,16.04 17.08,15.33 18.11,13.69C19.13,12.05 18.97,10.1 17.75,9.34C16.53,8.58 14.71,9.29 13.69,10.93M12,17.75C10,17.75 9.5,17 9.5,17C9.5,17.03 10,19 12,19C14,19 14.5,17 14.5,17C14.5,17 14,17.75 12,17.75Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl\">Science<br/>Fiction</span>
                </a>

            </div>
        </section>

    </main>

    ";
        // line 148
        yield from         $this->loadTemplate("parts/right-sidebar.html.twig", "other/discover.html.twig", 148)->unwrap()->yield($context);
        // line 149
        yield "</div>

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
        return "other/discover.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  199 => 149,  197 => 148,  64 => 17,  62 => 16,  45 => 1,);
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
    <title>Streemi - Découvrir</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \" >
<div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">

    {% include 'parts/left-menu.html.twig' %}

    <main class=\" flex-1 py-10  px-5 sm:px-10 \">

        <header class=\" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 \">
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

        <section>
            <nav class=\"flex space-x-6 text-gray-400 font-medium\">
                <a href=\"#\" class=\"hover:text-gray-700\">Séries</a>
                <a href=\"#\" class=\"text-gray-700 font-semibold\">Films</a>
                <a href=\"#\" class=\"hover:text-gray-700 \">Animés</a>
            </nav>

            <div class=\"flex flex-col items-center mt-9\">
                <a class=\"relative flex w-full flex-row p-3 items-center justify-center rounded-lg overflow-hidden border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>repeat-variant</title><path d=\"M6,5.75L10.25,10H7V16H13.5L15.5,18H7A2,2 0 0,1 5,16V10H1.75L6,5.75M18,18.25L13.75,14H17V8H10.5L8.5,6H17A2,2 0 0,1 19,8V14H22.25L18,18.25Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-md\">Trouver un <span class=\"text-red-600\">film</span> aléatoirement</span>
                </a>
            </div>
        </section>

        <section class=\"mt-9\">
            <div class=\"flex items-center justify-between\">
                <span class=\"font-semibold text-gray-700 text-base\">Nos recommandations</span>
                <div class=\"flex items-center space-x-2 fill-gray-500\">
                    <svg class=\"h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 fill-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z\"></path>
                    </svg>
                    <svg class=\"h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 fill-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z\"></path>
                    </svg>
                </div>
            </div>

            <div class=\"mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5 \">
                <div class=\"relative flex flex-col rounded-xl overflow-hidden aspect-square border\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://upload.wikimedia.org/wikipedia/en/1/14/Tenet_movie_poster.jpg\" class=\" h-4/5 object-cover w-full  \" alt=\"\">
                    <div class=\"w-full h-1/5 bg-white px-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium truncate\"><span class=\"text-red-600 font-bold\">#1</span> - Tenet</span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </div>
                <div class=\"relative flex flex-col rounded-xl overflow-hidden aspect-square border\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end absolute top-2 right-2 bg-red-600/80\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 24 24\" fill=\"currentColor\"><path d=\"M9,20.42L2.79,14.21L5.62,11.38L9,14.77L18.88,4.88L21.71,7.71L9,20.42Z\" /></svg>
                    </a>
                    <img src=\"https://upload.wikimedia.org/wikipedia/en/f/fc/Fight_Club_poster.jpg\" class=\" h-4/5 object-cover w-full  \" alt=\"\">
                    <div class=\"w-full h-1/5 bg-white px-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium truncate\"><span class=\"text-red-600 font-bold\">#2</span> - Fight Club</span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>8.8</span>
                        </div>
                    </div>
                </div>
                <div class=\"relative flex flex-col rounded-xl overflow-hidden aspect-square border\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://upload.wikimedia.org/wikipedia/en/8/8e/Dune_%282021_film%29.jpg\" class=\" h-4/5 object-cover w-full  \" alt=\"\">
                    <div class=\"w-full h-1/5 bg-white px-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium truncate\"><span class=\"text-red-600 font-bold\">#3</span> - Dune</span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>8.1</span>
                        </div>
                    </div>
                </div>



            </div>
        </section>

        <section class=\"mt-9\">
            <div class=\"flex items-center justify-between\">
                <span class=\"font-semibold text-gray-700 text-base\">Recommandations par catégories</span>
            </div>

            <div class=\"mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5\">
                <a class=\"relative flex flex-row items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg class=\"h-8 w-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M16.5,5.5A2,2 0 0,0 18.5,3.5A2,2 0 0,0 16.5,1.5A2,2 0 0,0 14.5,3.5A2,2 0 0,0 16.5,5.5M12.9,19.4L13.9,15L16,17V23H18V15.5L15.9,13.5L16.5,10.5C17.89,12.09 19.89,13 22,13V11C20.24,11.03 18.6,10.11 17.7,8.6L16.7,7C16.34,6.4 15.7,6 15,6C14.7,6 14.5,6.1 14.2,6.1L9,8.3V13H11V9.6L12.8,8.9L11.2,17L6.3,16L5.9,18L12.9,19.4M4,9A1,1 0 0,1 3,8A1,1 0 0,1 4,7H7V9H4M5,5A1,1 0 0,1 4,4A1,1 0 0,1 5,3H10V5H5M3,13A1,1 0 0,1 2,12A1,1 0 0,1 3,11H7V13H3Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Action</span>
                </a>
                <a class=\"relative flex flex-row items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg class=\"h-8 w-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>island</title><path d=\"M20 20C18.61 20 17.22 19.53 16 18.67C13.56 20.38 10.44 20.38 8 18.67C6.78 19.53 5.39 20 4 20H2V22H4C5.37 22 6.74 21.65 8 21C10.5 22.3 13.5 22.3 16 21C17.26 21.65 18.62 22 20 22H22V20H20M20.78 19H20C18.82 19 17.64 18.6 16.58 17.85L16 17.45L15.42 17.85C14.39 18.57 13.21 18.95 12 18.95C10.77 18.95 9.59 18.57 8.56 17.85L8 17.45L7.43 17.85C6.36 18.6 5.18 19 4 19H3.22C3.75 17.54 5.58 15 12 15C14 15 15 15.24 15 15.24C15.68 13.87 16.83 10.77 16 6.82L17.06 7.53C17.39 8.96 18 11.75 16.8 15.65C19.43 16.5 20.42 18 20.78 19M22 7.59C21.21 6.5 20 5.71 18.58 5.53C18.7 5.67 18.81 5.83 18.92 6C20.12 7.91 19.87 10.32 18.47 11.95C19.06 10.5 19 8.79 18.08 7.36C18 7.28 17.96 7.2 17.9 7.11C17.5 6.53 16.96 6.06 16.38 5.72C14.35 6.37 12.88 8.27 12.88 10.5C12.88 11.03 12.96 11.53 13.1 12C12.5 11.17 12.16 10.17 12.16 9.07C12.16 7.41 12.96 5.95 14.2 5.03C13.16 4.95 12.09 5.18 11.14 5.78C10.7 6.05 10.32 6.38 10 6.76C10.39 5.82 11.05 5 12 4.4C13.04 3.74 14.25 3.5 15.39 3.69C15.1 3.29 14.75 2.92 14.33 2.6C13.92 2.29 13.47 2.05 13 1.88C14 1.91 15.04 2.24 15.91 2.89C16.35 3.22 16.7 3.62 17 4.05C17.06 4.05 17.12 4.04 17.19 4.04C19.45 4.04 21.37 5.53 22 7.59Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Aventure</span>
                </a>
                <a class=\"relative flex flex-row items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg  class=\"h-8 w-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>emoticon</title><path d=\"M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M15.5,8A1.5,1.5 0 0,1 17,9.5A1.5,1.5 0 0,1 15.5,11A1.5,1.5 0 0,1 14,9.5A1.5,1.5 0 0,1 15.5,8M8.5,8A1.5,1.5 0 0,1 10,9.5A1.5,1.5 0 0,1 8.5,11A1.5,1.5 0 0,1 7,9.5A1.5,1.5 0 0,1 8.5,8M12,17.5C9.67,17.5 7.69,16.04 6.89,14H17.11C16.3,16.04 14.33,17.5 12,17.5Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Comédie</span>
                </a>
                <a class=\"relative flex flex-row items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg class=\"h-8 w-8\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>alien</title><path d=\"M12,3C16.97,3 21,6.58 21,11C21,15.42 15,21 12,21C9,21 3,15.42 3,11C3,6.58 7.03,3 12,3M10.31,10.93C9.29,9.29 7.47,8.58 6.25,9.34C5.03,10.1 4.87,12.05 5.89,13.69C6.92,15.33 8.74,16.04 9.96,15.28C11.18,14.5 11.33,12.57 10.31,10.93M13.69,10.93C12.67,12.57 12.82,14.5 14.04,15.28C15.26,16.04 17.08,15.33 18.11,13.69C19.13,12.05 18.97,10.1 17.75,9.34C16.53,8.58 14.71,9.29 13.69,10.93M12,17.75C10,17.75 9.5,17 9.5,17C9.5,17.03 10,19 12,19C14,19 14.5,17 14.5,17C14.5,17 14,17.75 12,17.75Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl\">Science<br/>Fiction</span>
                </a>

            </div>
        </section>

    </main>

    {% include 'parts/right-sidebar.html.twig' %}
</div>

</body>

</html>
", "other/discover.html.twig", "C:\\Users\\aitou\\OneDrive\\Bureau\\esgi_cours\\symfony\\cours-symfony-main\\streemi\\templates\\other\\discover.html.twig");
    }
}
