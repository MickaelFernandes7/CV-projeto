<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Sobre</title>
    <link rel="stylesheet" href="CSS/style2.css">
</head>
<body>

    <header>
       
        <section>
        <img src="Imagens/logo-tipo.png" alt="#">
        </section>
        
        <!--Botões do Header-->
            <nav>
            <ul>
            <li><h5 id="user"><?php session_start(); echo('<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg> '.$_SESSION['conexao']);?></h5></li>
            
            <li><a href="index.php" class="btn btn-sucess">Home</a></li>
            <br><br>
            <li><a href="index.php" class="btn btn-sucess">Cursos</a></li>
            <br><br>
            <li><a href="logout.php" class="btn btn-sucess">Sair</a></li>
            <br><br>
            <li><a href="sobre.php" class="btn btn-sucess">Sobre</a></li>
            </ul>
            </nav>

        </header>

        <main id="mainsobre">

        
        <figure>
            <h1><img src="Imagens/teamwork-2499619_640.jpg" id="teamwork" alt="">Quem Somos</h1>
                <figcaption>A plataforma CV tem a finalidade de capacitar jovens de baixa renda<br>a terem acesso a cursos e a se capacitarem para o mercado de trabalho e serem profissionais exemplares, Tenham um bom aprendizado.<br>Juntos fazemos a diferença!
        
                <br><br>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam dolore modi a maiores quam, amet alias aliquam id possimus non magnam<br> cupiditate voluptatem ipsum, nisi distinctio rerum illo. Vitae, eligendi?</p>

                <br><br>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis minima delectus similique ut quidem voluptatibus, ducimus mollitia<br> porro magni quia quo cum illum expedita sit accusamus reprehenderit unde sapiente necessitatibus?</p>
        
                
                <br><br>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis minima delectus similique ut quidem voluptatibus, ducimus mollitia<br> porro magni quia quo cum illum expedita sit accusamus reprehenderit unde sapiente necessitatibus?</p>

                
                <br><br>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis minima delectus similique ut quidem voluptatibus, ducimus mollitia<br> porro magni quia quo cum illum expedita sit accusamus reprehenderit unde sapiente necessitatibus?</p>
                </figcaption>
        </figure>

        </main>




        <footer id="sobre">
            <!--Html da Flexbox Direita-->
            <section id="sec2">
                <h4 class="sobre">Sobre mim</h4>
                <br>
            <p id="texto">Me chamo Mickael Fernandes. Sou um Desenvolvedor Full Stack Junior, e tenho buscado evoluir os meus conhecimentos na área da programação para me tornar um profissional capacitado e apto para exercer a função de programador no mercado profissional.</p>

                <ul>
                    <a href="https://www.facebook.com/mickael.fernandes.7334">
                     <li class="li">
                        <img id="facebook" alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNDgiIGhlaWdodD0iNDgiCnZpZXdCb3g9IjAgMCAxNzIgMTcyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDE3MnYtMTcyaDE3MnYxNzJ6IiBmaWxsPSJub25lIj48L3BhdGg+PGcgZmlsbD0iI2ZmZmZmZiI+PHBhdGggZD0iTTE1MC41LDIxLjVoLTEyOXYxMjloNjguOTUwNXYtNDkuODg3MTdoLTE2Ljc5MTV2LTE5LjUyOTE3aDE2Ljc5MTV2LTE0LjM2OTE3YzAsLTE2LjY1NTMzIDEwLjE4MzgzLC0yNS43MzU1IDI1LjA0NzUsLTI1LjczNTVjNS4wMDk1LC0wLjAxNDMzIDEwLjAxMTgzLDAuMjQzNjcgMTQuOTkyNjcsMC43NTI1djE3LjQxNWgtMTAuMjM0Yy04LjA5ODMzLDAgLTkuNjc1LDMuODI3IC05LjY3NSw5LjQ3NDMzdjEyLjQzNDE3aDE5LjM1bC0yLjUxNTUsMTkuNTI5MTdoLTE2Ljk0OTE3djQ5LjkxNTgzaDQwLjAzM3oiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg=="/>
                     </li>
                    </a>

                    <!--Ícone Linkedin-->
                <a class="link_rede" href="https://br.linkedin.com/in/mickael-fernandes-bispo-de-souza-8ab2b01b8/pt-br" target="blanck">
                    <li class="li">
                        <svg id="linkedin" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="44" height="48"
                        viewBox="0 0 30 30"
                        style=" fill:#ffffff;">    <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path></svg>
                    </li>
                </a>

                <!--ìcone G-mail-->
                <a class="link_rede" href="mailto:mickaelbpsouza@gmail.com" target="blanck">
                    <svg id="gmail" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="48" height="43"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M82.56,13.4375v20.9625h6.88v-20.9625zM89.44,34.4v32.68l18.1675,-18.275l4.945,4.8375l-26.5525,26.5525l-26.5525,-26.5525l4.945,-4.8375l18.1675,18.275v-32.68h-82.56v123.84h172v-123.84zM6.88,41.28l79.12,65.36l79.12,-65.36v110.08h-13.76v-78.475l-65.36,54.395l-65.36,-54.395v78.475h-13.76z"></path></g></g></svg>
                    </li>
                </a>
                </ul>

            </section>
            <!--Fim do HTML da flexbox direita-->

            <!--Html Flexbox Esquerda-->
            <section id="sec3">

                <article class="article"><p><svg id="localizacao" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="48" height="48"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,7.16667c-23.75033,0 -43,19.24967 -43,43c0,30.71633 43,78.83333 43,78.83333c0,0 43,-48.117 43,-78.83333c0,-23.75033 -19.24967,-43 -43,-43zM86,34.81152c8.48533,0 15.35514,6.86981 15.35514,15.35514c0,8.47817 -6.87698,15.35514 -15.35514,15.35514c-8.47817,0 -15.35514,-6.86981 -15.35514,-15.35514c0,-8.48533 6.86981,-15.35514 15.35514,-15.35514zM34.4056,107.5l-20.07227,50.16667h143.33333l-20.07226,-50.16667h-17.10482c-3.47583,5.23883 -6.96544,10.09067 -10.17611,14.33333h17.59473l8.5944,21.5h-101.00521l8.5944,-21.5h17.59473c-3.21067,-4.24267 -6.70027,-9.0945 -10.17611,-14.33333z"></path></g></g></svg>
                    R. José Antônio dos Santos,603. <br>São Paulo, Brasil.
                </p></article>

                <article class="article">
                    <p><svg id="telefone" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="40" height="40"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M134.2675,161.68c-0.05375,0 -0.1075,0 -0.16125,0c-25.85375,-0.84656 -56.14187,-25.9075 -77.01031,-46.78937c-20.89531,-20.88188 -45.95625,-51.18344 -46.7625,-76.91625c-0.29562,-9.03 21.86281,-25.08781 22.09125,-25.24906c5.75125,-4.00438 12.13406,-2.58 14.75438,1.04812c1.77375,2.45906 18.57062,27.90969 20.39812,30.79875c1.89469,2.99656 1.6125,7.45781 -0.7525,11.9325c-1.30344,2.48594 -5.63031,10.09156 -7.65937,13.63906c2.19031,3.1175 7.98187,10.76344 19.94125,22.72281c11.97281,11.95937 19.60531,17.76437 22.73625,19.95469c3.5475,-2.02906 11.15312,-6.35594 13.63906,-7.65937c4.4075,-2.33813 8.84187,-2.63375 11.86531,-0.77938c3.09063,1.89469 28.47406,18.77219 30.81219,20.39813c1.96187,1.38406 3.225,3.74906 3.48031,6.50375c0.24188,2.78156 -0.61812,5.72437 -2.40531,8.29094c-0.14781,0.215 -16.0175,22.10469 -24.96688,22.10469z"></path></g></g></svg> (11)5893-3389</p>
                </article>


            </section>

        </footer>
    
</body>
</html>