<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");							
?>
<!DOCTYPE html>
<head>
        <!--	HYML Header start  -->
		<?php include("include/html_header.php");?>
        <!--	HYML Header end  -->
        <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
</head>
<body>

<!--	Page Loader  -->
<!--<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>  -->
<!--	Page Loader  -->

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
		 
        <!--	Text Block One
		======================================================-->
		<!-----  Our Services  ---->
		
        <!--	Recent Properties  -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-secondary double-down-line text-center mb-4">
						Recentes</h2>
                    </div>
                    <!--- <div class="col-md-6">
                        <ul class="nav property-btn float-right" id="pills-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Featured</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Top Sale</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab3" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Best Sale</a> </li>
                        </ul>
                    </div> --->
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								 <div id="dvMainCntnt">
                                    Terms and Conditions
                                </div>
                            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 


 


		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        <script>
currIContent = "n"; // ajax request to include the tplates/... file or not 
ppStr = "<h2>1. Termos</h2>            <p>Ao acessar ao site <a href='logisgo.com'>logisgo.com</a>, concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis ??e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum                desses termos, está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e marcas comerciais aplicáveis.</p>            <h2>2. Uso de Licença</h2>            <p>�&#8240; concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software) no site logisgo.com , apenas para visualização transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma transferência de título e,                sob esta licença, você não pode: </p>            <ol>            <li>modificar ou copiar os materiais;  </li>            <li>usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não comercial);  </li>            <li>tentar descompilar ou fazer engenharia reversa de qualquer software contido no site logisgo.com;  </li>            <li>remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou  </li>            <li>transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.</li>            </ol>            <p>Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser rescindida por logisgo.com a qualquer momento. Ao encerrar a visualização desses materiais ou após o término desta licença, você deve apagar todos os materiais                baixados em sua posse, seja em formato eletrónico ou impresso.</p>            <h2>3. Isenção de responsabilidade</h2>            <ol>            <li>Os materiais no site da logisgo.com são fornecidos 'como estão'. logisgo.com não oferece garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização,            adequação a um fim específico ou não violação de propriedade intelectual ou outra violação de direitos. </li>            <li>Além disso, o logisgo.com não garante ou faz qualquer representação relativa à precisão, aos resultados prováveis ??ou à confiabilidade do uso dos            materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</li>            </ol>            <h2>4. Limitações</h2>            <p>Em nenhum caso o logisgo.com ou seus fornecedores serão responsáveis ??por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os materiais em logisgo.com,                mesmo que logisgo.com ou um representante autorizado da logisgo.com tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de responsabilidade                por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.</p>            <h2>5. Precisão dos materiais</h2>            <p>Os materiais exibidos no site da logisgo.com podem incluir erros técnicos, tipográficos ou fotográficos. logisgo.com não garante que qualquer material em seu site seja preciso, completo ou atual. logisgo.com pode fazer alterações nos materiais contidos em seu                site a qualquer momento, sem aviso prévio. No entanto, logisgo.com não se compromete a atualizar os materiais.</p>            <h2>6. Links</h2>            <p>O logisgo.com não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por logisgo.com do site. O uso de qualquer site vinculado é por conta e risco do usuário.</p>            </p>            <h3>Modificações</h3>            <p>O logisgo.com pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de serviço.</p>            <h3>Lei aplicável</h3>            <p>Estes termos e condições são regidos e interpretados de acordo com as leis do logisgo.com e você se submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou localidade.</p>";
dvMainCntnt.innerHTML = "<div style=\"margin: 10px;max-width:90%;word-wrap:break-word\" class=\"txtSmall\">" + ppStr + "</div>";</script>
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-primary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 

<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/tmpl.js"></script>

<script src="js/wow.js"></script> 
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
 </body>
</body>

</html>