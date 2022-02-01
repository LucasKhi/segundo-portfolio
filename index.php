<?php include 'email.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./CSS/style.css"/>
        <link rel="icon" type="image/x-icon" href="images/code.ico"/>

        <title>Projeto</title>
    </head>
    <body>


        <header>
            <div class="logo">
                <h2>Meu<span> Portfólio</span></h2>
            </div>
        </header>

        <main>

            <section class="conteudo-primario">        
                <div class="area-conteudo">
                    <h3 class="titulo-principal">Lucas Silva e Souza</h3>
                    <h2 class="descricao-titulo">Estudante de Análise e </br>desenvolvimento de sistemas,</br> cursando o segundo período.</h2>
                </div>
        
                <div class="imagem-conteudo">
                    <img src="images/FOTO1RERERE.png">
                </div>        
            </section>
        
        <!---PLANOS-->
        
            <section class="conteudo-secundario">
                <h3 class="conteudo-secundario-titulo">Planos futuros</h3>
                <ul>
                    <li class="conteudo-secundario-lista">Especializar na área de front-end e conseguir uma base profissional</li>
                    <li class="conteudo-secundario-lista">Aprofundar nos conhecimentos já estabelecidos na área</li>
                    <li class="conteudo-secundario-lista">Abranger para outras áreas e aprofundar em seus conhecimentos</li>
                </ul>
            </section>
        
        
        
        <!--HABILIDADES-->
            <article class="conteudo-skills">
                <h1 class="skills-titulo">Minhas habilidades</h1>
                <section class="skills">
                    <h2 class="subtitulo-skills">Hard skills</h2>
                    <div class="campo-barra borda-barra">
                        <div class="logica-progresso">
                            <h2 class="titulo-progresso campo-progresso">Lógica de programação</h2>
                        </div>
                    </div>
                
                    <div class="campo-barra borda-barra">
                        <div class="html-progresso">
                            <h2 class="titulo-progresso campo-progresso">html/css</h2>
                        </div>
                    </div>

                    <div class="campo-barra borda-barra">
                        <div class="js-progresso">
                            <h2 class="titulo-progresso campo-progresso">javascript</h2>
                        </div>
                    </div>

                    <div class="campo-barra borda-barra">
                        <div class="react-progresso">
                            <h2 class="titulo-progresso campo-progresso">react</h2>
                        </div>
                    </div>

                    <div class="campo-barra borda-barra">
                        <div class="php-progresso">
                            <h2 class="titulo-progresso campo-progresso">php</h2>
                        </div>
                    </div>
                </section>

                <section class="skills">
                    <h2 class="subtitulo-skills">Soft skills</h2>
                    <div class="campo-barra borda-barra">
                        <div class="trabalho-progresso">
                            <h2 class="titulo-progresso campo-progresso">Trabalho em equipe</h2>
                        </div>
                    </div>
                    
                    <div class="campo-barra borda-barra">
                        <div class="aprendizado-progresso">
                            <h2 class="titulo-progresso campo-progresso ">Facilidade de aprendizado</h2>
                        </div>
                    </div>

                    <div class="campo-barra borda-barra">
                        <div class="ouvir-progresso">
                            <h2 class="titulo-progresso campo-progresso">Atenção para ouvir</h2>
                        </div>
                    </div>

                    <div class="campo-barra borda-barra">
                        <div class="proatividade-progresso">
                            <h2 class="titulo-progresso campo-progresso">Proatividade</h2>
                        </div>
                    </div>

                    <div class="campo-barra borda-barra">
                        <div class="criatividade-progresso">
                            <h2 class="titulo-progresso campo-progresso">Criatividade</h2>
                        </div>
                    </div>
                </section>        
            </article>
        
        <!--AREA-FORM-->
        
            <div class="conteudo-formulario">
                <h2 class="titulo-formulario">ENTRE EM CONTATO POR EMAIL</h2>
                <div class="formulario">
                    <form action="" method="post">
                        <input type="text" name="nome" placeholder="seu nome" required>
                        <input type="email" name="email" placeholder="seu email" required>
                        <textarea name="mensagem" rows="5" placeholder="Sua mensagem" required></textarea>
                        <input type="submit" name="submit" value="Enviar">
                    </form>
                </div>
            </div>

        </main>


        <!-- AREA REDES SOCIAIS -->
        
        <footer>
            <div class="social">
                <h3 class="social-titulo">REDES SOCIAIS</h3>

                <div class="social-links">
                    <a class="instagram-link" href="https://www.instagram.com/lucask.hi/" target="_blank">
                        <img src="https://img.icons8.com/material-outlined/30/000000/instagram-new--v1.png"/>
                    </a>
        
                    <a class="linkedin-link" href="https://www.linkedin.com/in/lucas-souza-5a20a121b" target="_blank">
                        <img src="https://img.icons8.com/material-outlined/30/000000/linkedin--v1.png"/>
                    </a>
        
                    <a class="whatsapp-link" href="https://api.whatsapp.com/send/?phone=5527998706935&text=Ol%C3%A1.+Estou+entrando+em+contato+pelo+portfolio&app_absent=0" target="_blank">
                        <img src="https://img.icons8.com/material-outlined/30/000000/whatsapp--v1.png"/>
                    </a>
                </div>
            </div>

        </footer>

        <script type="text/javascript">
        if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
        }
        </script>

    </body>
</html>