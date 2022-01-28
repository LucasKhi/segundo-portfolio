<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
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
    
      <!---AREA CARDS-->
    
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

            
            <!-- <div class="lista-skills">
                <ul class="hard-skills">
                    <label>Hard Skills</label>
                    <li>LÓGICA DE PROGRAMAÇÃO</li>
                    <li>JAVASCRIPT</li>
                    <li>HTML/CSS</li>
                    <li>REACT</li>
                    <li>PHP</li>
                </ul>

                <ul class="soft-skills">
                    <label>Soft Skills</label>
                    <li>Trabalho em equipe</li>
                    <li>Criatividade</li>
                    <li>Pensamento crítico</li>
                    <li>Facilidade de aprendizado</li>
                    <li>Gestão de tempo</li>
                    <li>Atenção para ouvir</li>
                    <li>Proatividade</li>
                </ul>
            </div> -->
            <section class="hard-skills">
                <h2 class="titulo-hard-skill">Lógica de programação</h2>
                <ul class="level-skill">                    
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </section>

           <section class="soft-skills">
               <!-- <h2 class="titulo-soft-skills"></h2>
               <ul class="level-skill">
                   <li></li>
                   <li></li>
                   <li></li>
                   <li></li>
                   <li></li>
               </ul> -->
           </section>

    
        </article>
    
      <!--AREA-FORM-->
    
        <div class="conteudo-formulario">
            <h2 class="titulo-formulario">ENTRE EM CONTATO POR EMAIL</h2>
            <div class="formulario">
                <form action="email.php" method="POST">
                    <input type="text" name="nome" placeholder="seu nome" required>
                    <input type="email" name="email" placeholder="seu email" required>
                    <textarea name="message" rows="5" placeholder="Sua mensagem" required></textarea>
                    <input type="submit" value="enviar">
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
    
                <a class="whatsapp-link" href="bit.ly/3fRZRfg" target="_blank">
                    <img src="https://img.icons8.com/material-outlined/30/000000/whatsapp--v1.png"/>
                </a>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        if(window.history.replaceState){
            window.history.replaceState(null,null, window.location.href);
        }
    </script>

</body>
</html>