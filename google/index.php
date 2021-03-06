<!doctype html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <link href="googleStyle.css" rel="stylesheet" />
    <link href="googleResultsStyle.css" rel="stylesheet" />
    <link href="ListingResultsStyle.css" rel="stylesheet" />
    <link href="autocompleter.css" rel="stylesheet" />
    <link rel="shortcut icon" href="title_logo.svg" />
    <script type="text/javascript" src="vue.js"></script>
    <script src="autocompleter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js" integrity="sha512-JZSo0h5TONFYmyLMqp8k4oPhuo6yNk9mHM+FY50aBjpypfofqtEWsAgRDQm94ImLCzSaHeqNvYuD9382CEn2zw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <title>Google</title>
</head>
<body class="home">
    
    <div id="app">
        <header>
            <div class="h-flex-cont">
                <section class="h-flex-item links">
                    <a class="clean-dark-link" href="https://mail.google.com/mail/&ogbl">Gmail</a>
                    <a class="clean-dark-link" href="https://www.google.pl/imghp?hl=pl&ogbl">Grafika</a>
                </section>
                <div class="top_stripe">
                <section class="m-flex-item ">
                        
                           <v-autocompleter id="cityNTop" ref="top" ></v-autocompleter>
                </section>
                </div>
                <section class="h-flex-item app">
                    <a class="app" title="Aplikacje Google" href="https://www.google.pl/intl/pl/about/products"
                        aria-label="Aplikacje Google"><img class="app" src="Grafiki/aplikacje.svg" /></a>
                    <a class="blue-button"
                        href="https://accounts.google.com/ServiceLogin?hl=pl&amp;passive=true&amp;continue=https://www.google.com/&amp;ec=GAZAmgQ">Zaloguj
                        się</a>
                </section>
            </div>
            <div class="navigation">
                <section class="referance active">Wszystko</section>
                <section class="referance">Grafika</section>
                <section class="referance">Mapy</section>
                <section class="referance">Wiadomości</section>
                <section class="referance">Wideo</section>
                <section class="referance">Więcej</section>
                <section class="referance">Ustawienia</section>
                <section class="referance">Narzędzia</section>
            </div>
        </header>
        <main>
            <div class="m-flex-cont">
                <div class="searches-time">Około 151 000 000 wyników (0,51 s)</div>
                <section class="m-flex-item"><a id="ggl-main-link"
                        href="https://www.google.com/webhp?hl=pl&sa=X&ved=0ahUKEwj4qcOGvtPvAhWPtYsKHYjEAlgQPAgI"
                        title="Przejdź do strony głównej Google"><img class="googleLogo" alt="Google"
                            src="Grafiki/Google-Logo.png" /></a></section>
                <form class="search" action="/search">
                    <section class="m-flex-item  from_main" >
                        
                            <v-autocompleter id="cityNTop"  ref="bottom" @enter='showResults'></v-autocompleter>
                    </section>
                    
                </form>
                <div class="m-flex-item greyButtons" :class="{hidden : /*googleSearch.length > 0 && focused && filteredCities.length>0*/0}">
                    <input class="grey-button sub" type="submit" value="Szukaj w Google" />
                    <input class="grey-button" type="submit" value="Szczęśliwy traf" />
                </div>
            </div>
            <div class="listing">
                <div class="searches">
                    <div class="basic">
                        <a href="#" class="URL">
                            <div>
                                <span class="top_URL"><span class="dark_URL">developers.google.com</span><span
                                        class="light_URL"> > advanced > good-titles-snippets </span><span
                                        class="triangle"></span></span>
                                <br />
                                <h1 class="original_link visited">Jak tworzyć dobre tytuły i krótkie opisy w wynikach...
                                </h1>
                            </div>
                        </a>
                        <div class="content">
                            <span>Gdy już znamy zapytanie użytkownika, możemy często znaleźć inny
                                <em>tekst</em> na stronie, ... daj nam znać na naszym Forum pomocy Centrum
                                <em>wyszukiwarki</em> Google.
                            </span>
                        </div>
                    </div>
                    <div class="basic">
                        <a href="#" class="URL">
                            <div>
                                <span class="top_URL"><span class="dark_URL">developers.google.com</span><span
                                        class="light_URL"> > advanced > good-titles-snippets </span><span
                                        class="triangle"></span></span>
                                <br />
                                <h1 class="original_link visited">Jak tworzyć dobre tytuły i krótkie opisy w wynikach...
                                </h1>
                            </div>
                        </a>
                        <div class="content">
                            <span><span class="date">23 gru 2018 - </span>Gdy już znamy zapytanie użytkownika, możemy
                                często
                                znaleźć inny
                                <em>tekst</em> na stronie, ... daj nam znać na naszym Forum pomocy Centrum
                                <em>wyszukiwarki</em> Google.
                            </span>
                        </div>
                    </div>
                    <div class="basic">
                        <a href="#" class="URL">
                            <div>
                                <span class="top_URL"><span class="dark_URL">developers.google.com</span><span
                                        class="light_URL"> > advanced > good-titles-snippets </span><span
                                        class="triangle"></span></span>
                                <br />
                                <h1 class="original_link visited">Jak tworzyć dobre tytuły i krótkie opisy w wynikach...
                                </h1>
                            </div>
                        </a>
                        <div class="content">
                            <span><span class="date">23 gru 2018 - </span>Gdy już znamy zapytanie użytkownika, możemy
                                często
                                znaleźć inny
                                <em>tekst</em> na stronie, ... daj nam znać na naszym Forum pomocy Centrum
                                <em>wyszukiwarki</em> Google.
                            </span>
                        </div>
                    </div>
                    <div class="basic">
                        <a href="#" class="URL">
                            <div>
                                <span class="top_URL"><span class="dark_URL">developers.google.com</span><span
                                        class="light_URL"> > advanced > good-titles-snippets </span><span
                                        class="triangle"></span></span>
                                <br />
                                <h1 class="original_link visited">Jak tworzyć dobre tytuły i krótkie opisy w wynikach...
                                </h1>
                            </div>
                        </a>
                        <div class="content">
                            <span><span class="date">23 gru 2018 - </span>Gdy już znamy zapytanie użytkownika, możemy
                                często
                                znaleźć inny
                                <em>tekst</em> na stronie, ... daj nam znać na naszym Forum pomocy Centrum
                                <em>wyszukiwarki</em> Google.
                            </span>
                        </div>
                    </div>
                    <div class="basic">
                        <a href="#" class="URL">
                            <div>
                                <span class="top_URL"><span class="dark_URL">developers.google.com</span><span
                                        class="light_URL"> > advanced > good-titles-snippets </span><span
                                        class="triangle"></span></span>
                                <br />
                                <h1 class="original_link visited">Jak tworzyć dobre tytuły i krótkie opisy w wynikach...
                                </h1>
                            </div>
                        </a>
                        <div class="content">
                            <span><span class="date">23 gru 2018 - </span>Gdy już znamy zapytanie użytkownika, możemy
                                często
                                znaleźć inny
                                <em>tekst</em> na stronie, ... daj nam znać na naszym Forum pomocy Centrum
                                <em>wyszukiwarki</em> Google.
                            </span>
                        </div>
                    </div>
                    <div class="basic">
                        <a href="#" class="URL">
                            <div>
                                <span class="top_URL"><span class="dark_URL">developers.google.com</span><span
                                        class="light_URL"> > advanced > good-titles-snippets </span><span
                                        class="triangle"></span></span>
                                <br />
                                <h1 class="original_link visited">Jak tworzyć dobre tytuły i krótkie opisy w wynikach...
                                </h1>
                            </div>
                        </a>
                        <div class="content">
                            <span><span class="date">23 gru 2018 - </span>Gdy już znamy zapytanie użytkownika, możemy
                                często
                                znaleźć inny
                                <em>tekst</em> na stronie, ... daj nam znać na naszym Forum pomocy Centrum
                                <em>wyszukiwarki</em> Google.
                            </span>
                        </div>
                    </div>
                    <div class="basic">
                        <a href="#" class="URL">
                            <div>
                                <span class="top_URL"><span class="dark_URL">developers.google.com</span><span
                                        class="light_URL"> > advanced > good-titles-snippets </span><span
                                        class="triangle"></span></span>
                                <br />
                                <h1 class="original_link visited">Jak tworzyć dobre tytuły i krótkie opisy w wynikach...
                                </h1>
                            </div>
                        </a>
                        <div class="content">
                            <span><span class="date">23 gru 2018 - </span>Gdy już znamy zapytanie użytkownika, możemy
                                często
                                znaleźć inny
                                <em>tekst</em> na stronie, ... daj nam znać na naszym Forum pomocy Centrum
                                <em>wyszukiwarki</em> Google.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="similar">
                    <h3>Podobne wyszukiwania</h3>
                    <div class="flex-container">
                        <div class="cont_central">
                            <a href="#">
                                <img class="inputIcon SearchIcon" src="Grafiki/search.svg" />
                                <span><b>bootstrap 4 sticky-top column</b></span>
                            </a>
                            <a href="#">
                                <img class="inputIcon SearchIcon" src="Grafiki/search.svg" />
                                <span><b>bootstrap 4 sticky-top column</b></span>
                            </a>
                            <a href="#">
                                <img class="inputIcon SearchIcon" src="Grafiki/search.svg" />
                                <span><b>bootstrap 4 sticky-top column</b></span>
                            </a>
                            <a href="#">
                                <img class="inputIcon SearchIcon" src="Grafiki/search.svg" />
                                <span><b>bootstrap 4 sticky-top column</b></span>
                            </a>
                        </div>
                        <div class="cont_central">
                            <a href="#">
                                <img class="inputIcon SearchIcon" src="Grafiki/search.svg" />
                                <span><b>bootstrap 4 sticky-top column</b></span>
                            </a>
                            <a href="#">
                                <img class="inputIcon SearchIcon" src="Grafiki/search.svg" />
                                <span><b>bootstrap 4 sticky-top column</b></span>
                            </a>
                            <a href="#">
                                <img class="inputIcon SearchIcon" src="Grafiki/search.svg" />
                                <span><b>bootstrap 4 sticky-top column</b></span>
                            </a>
                            <a href="#">
                                <img class="inputIcon SearchIcon" src="Grafiki/search.svg" />
                                <span><b>bootstrap 4 sticky-top column</b></span>
                            </a>
                        </div>
                    </div>
                    <div class="cont_central">
                        <table class="ggl_table">
                            <tr>
                                <td>
                                    <a href="#">
                                        <div class="cont_central">
                                            <div class="letter Blue arrow">
                                                < </div>
                                                    <div class="number">Poprzednia</div>
                                            </div>
                                    </a>
                                </td>
                                <td>
                                    <div class="cont_central">
                                        <div class="letter Blue">G</div>
                                        <div class="number"></div>
                                    </div>
                                </td>
                                <td>
                                    <a class="This_page" href="#">
                                        <div class="cont_central">
                                            <div class="letter Red">o</div>
                                            <div class="number This_page">1</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="cont_central">
                                            <div class="letter Yellow">o</div>
                                            <div class="number">2</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="cont_central">
                                            <div class="letter Yellow">o</div>
                                            <div class="number">3</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="cont_central">
                                            <div class="letter Yellow">o</div>
                                            <div class="number">4</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="cont_central">
                                            <div class="letter Yellow">o</div>
                                            <div class="number">5</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="cont_central">
                                            <div class="letter Yellow">o</div>
                                            <div class="number">6</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="cont_central">
                                            <div class="letter Yellow">o</div>
                                            <div class="number">7</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="cont_central">
                                            <div class="letter Yellow">o</div>
                                            <div class="number">8</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="cont_central">
                                            <div class="letter Yellow">o</div>
                                            <div class="number">9</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="cont_central">
                                            <div class="letter Yellow">o</div>
                                            <div class="number">10</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <div class="cont_central">
                                        <div class="letter Blue">g</div>
                                        <div class="number"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cont_central">
                                        <div class="letter Green">l</div>
                                        <div class="number"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cont_central">
                                        <div class="letter Red">e</div>
                                        <div class="number"></div>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="cont_central">
                                            <div class="letter Blue arrow">></div>
                                            <div class="number">Następna</div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer class="bottomest">
            <div class="bottom">
                <div class="locate">Polska<span class="location"><span class="dot"></span><b> 12-234, Miasto</b> - Z
                        Twojego
                        adresu internetowego - <a href="#">Użyj dokładnej lokalizacji</a> - <a href="#">Dowiedz się
                            więcej</a></span></div>
            </div>
            <div class=" f-flex-container">
                <section class="f-flex-item section-flex i1st">
                    <a class="section-flex-item clean-link pad"
                        href="https://about.google/?utm_source=google-PL&amp;utm_medium=referral&amp;utm_campaign=hp-footer&amp;fg=1">O
                        nas</a>
                    <a class="section-flex-item clean-link pad"
                        href="https://www.google.com/intl/pl_pl/ads/?subid=ww-ww-et-g-awa-a-g_hpafoot1_1!o2&amp;utm_source=google.com&amp;utm_medium=referral&amp;utm_campaign=google_hpafooter&amp;fg=1">Reklamuj
                        się</a>
                    <a class="section-flex-item clean-link pad"
                        href="https://www.google.com/services/?subid=ww-ww-et-g-awa-a-g_hpbfoot1_1!o2&amp;utm_source=google.com&amp;utm_medium=referral&amp;utm_campaign=google_hpbfooter&amp;fg=1">Dla
                        firm</a>
                    <a class="section-flex-item clean-link pad"
                        href="https://google.com/search/howsearchworks/?fg=1">Jak
                        działa wyszukiwania</a>
                </section>
                <section class="f-flex-item leafy">
                    <a class="clean-link"
                        href="https://sustainability.google/intl/pl/commitments-europe/?utm_source=googlehpfooter&amp;utm_medium=housepromos&amp;utm_campaign=bottom-footer&amp;utm_content=">
                        <img class="leaf" src="Grafiki/leaf.svg">Neutralność węglowa od 2007 roku</a>
                </section>
                <section class="f-flex-item section-flex i3rd">
                    <a class="section-flex-item clean-link additional"
                        href="https://support.google.com/websearch/?p=ws_results_help&amp;hl=pl&amp;fg=1">Pomoc</a>
                    <a class="section-flex-item clean-link additional" href="#">Prześlij opinię</a>
                    <a class="section-flex-item clean-link"
                        href="https://policies.google.com/privacy?hl=pl&amp;fg=1">Prywatność</a>
                    <a class="section-flex-item clean-link"
                        href="https://policies.google.com/terms?hl=pl&amp;fg=1">Warunki</a>
                    <div class="section-flex-item menubutton">
                        <button class="menu clean-link clean-button" aria-haspopup="true" id="menu1"
                            aria-controls="menu2">Ustawienia</button>
                        <ul class="menu-list" role="menu" id="menu2" aria-labelledby="menu1">
                            <!--zeby to zrobic potrzeba chyba java scripta-->
                            <li role="none"><a class="menu" tabindex="-1"
                                    href="https://www.google.com/preferences?hl=pl&amp;fg=1" role="menuitem">Ustawienia
                                    wyszukiwania</a></li>
                            <li role="none"><a class="menu" tabindex="-1" href="/advanced_search?hl=pl&amp;fg=1"
                                    role="menuitem">Szukanie zaawansowane</a></li>
                            <li role="none"><a class="menu" tabindex="-1"
                                    href="/history/privacyadvisor/search/unauth?utm_source=googlemenu&amp;fg=1"
                                    role="menuitem">Twoje dane w wyszukiwarce</a></li>
                            <li role="none"><a class="menu" tabindex="-1" href="/history/optout?hl=pl&amp;fg=1"
                                    role="menuitem">Historia wyszukiwania</a></li>
                            <li role="none"><a class="menu" tabindex="-1"
                                    href="https://support.google.com/websearch/?p=ws_results_help&amp;hl=pl&amp;fg=1"
                                    role="menuitem">Pomoc dotycząca wyszukiwania</a></li>
                            <li class="menu" role="none"><button class="menu" role="menuitem">Prześlij opinię</button>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </footer>
        
    </div>
    <script>
        var app = new Vue({
                el: '#app',
                
                updated() {
                    app.$nextTick(() => {
                            if (app.$refs.bottom.change) {
                                app.$refs.top.focus();
                            } else {
                                app.$refs.bottom.focus();
                            }
                        }
                    )},
                computed:{
                    equalImput:function(){
                        
                        let value=''
                        if(  document.getElementById("app").classList.contains('results')){
                            value= app.$refs.top.googleSearch;
                        }else{
                            console.log(value);
                            value= app.$refs.bottom.googleSearch;
                            console.log(value);
                        }
                        app.$refs.top.googleSearch=app.$refs.bottom.googleSearch=value;
                        return  value;
                }},
                methods:{
                    showResults: function(){
                        let value=app.$refs.bottom.googleSearch
                        app.$refs.bottom.enterClicked()
                        app.$refs.top.googleSearch=value
                        if(app.$refs.top.googleSearch.length==0){
                            app.$refs.bottom.googleSearch=''
                        }
                        app.$refs.top.change=true
                        return this.change
                    },
                }
        });
            
    </script>
</body>
</html>