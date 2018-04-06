<!doctype html>
<!--------------------------------Bootstrap  Main variant ------------------------------------------>
  <html lang="en-US">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html">
      <meta name="description" content="Генератор-рандомайзер создает случайные списки, номера для лоторей, розыграшей " />
      <meta name="keywords" content="рандомное число, случайное число, случайные списки, номера для лоторей, розыграшей  ">
      <title>Генератор случайных цифр, рандомайзер</title>
  
      <!--Favicon-->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <link rel="stylesheet" type="text/css" media="all" href="css/myRandomCss.css">
      <script src="random.js"></script><!--  Core Random JS-->
	  <script src="additional_js/ads.js"></script><!--  Change ads JS-->
	  
	
	  
	  <meta name="viewport" content="width=device-width" />

     </head>

     <body>

       <div id="headX" class="jumbotron text-center gradient" style =' background-color: ;'> <!--#2ba6cb;-->
         <h1 id="h1Text"> <span id="textChange"> Рандомайзер</span>   </h1>
           <p class="header_p">создает случайные списки, номера для лоторей, розыграшей  <!--generates random lists, ramdomizes integers, etc--> <span class="glyphicon glyphicon-wrench"></span>
           </p>
		   <p class="language"><a href="/eng">ENG</a></p>
		   
	   </div>



       <div class="item contact padding-top-0 padding-bottom-0" id="contact1">
         <div class="wrapper grey">
    	   <div class="container">

             <div class="checkbox"> <!-- Checkbox ID will be used in JS to form div ids (randListDiv,etc) -->
               <label><input type="checkbox" value="" name="r" id="randList" checked >Случайный список<!--Random list--></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <label><input type="checkbox" value="" name="r" id="randInteger">Одно случайное число<!--Random int--></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <label><input type="checkbox" value="" name="r" id="randIntegList">Случайный список номеров в диапазоне<!--Random int list--></label>
              </div>
			  <br>


				
    	     <!------------------------START id="randList" DIV 1111 (visible by default)-------------------------------------->
    	     <!-- Each div should have id = checkboxID + "Div", input should be checkboxID + "_Input" to automate it in JS -->
			 <div class="col-md-12 random" id="randListDiv"> <!--5-->       
    		   <!--<h3 class="margin-bottom-40 editContent">Your  <span class='subtext'> text</span></h3>-->

               <!--------------------------------------------------- TextArea Form  Start------------------------------------------------->
    		   <p> Генерирует случайный порядок Вашего списка. Каждый пункт списка или имена вводить с новой строки, через Enter<!--Randomize the list--> <!--<span class="span-small"> &nbsp;(enter the items, each from the new line)  </span> -->&nbsp;<span class='glyphicon glyphicon-retweet'></span></p>
			   
    		   <form role="form">  	
    		     <div class="form-group"><!--coordsInput-->
    		       <textarea class="form-control" rows="6" placeholder="Your list here.." id='randList_Input' required>
				   </textarea>	  		  				  			
    		     </div>
    			</form>	  		
               <!---------------------------------------------------TextArea FORm  END------------------------------------------------->
 
    		 </div><!-- /.col-md-5 --> <!-- END  <div class="col-md-5">-->

             <!----------------------------------------END id="randListDiv" DIV 1111----------------------------------->



  
  
  
  
  
  
  
  
             <!------------------------START id="randInteger" DIV 222 (hidden by default)(returns one single random int from range) -------------------------------------->
    		 <!-- Each div should have id = checkboxID + "Div", input should be checkboxID + "_Input" to automate it in JS -->
			 <div class="col-md-12 random" id="randIntegerDiv"> <!--5-->       
    		   <!--<h3 class="margin-bottom-40 editContent">Your  <span class='subtext'> text</span></h3>-->

               <!--------------------------------------------------- TextArea FORm  Start------------------------------------------------->
    		   <p> Генерирует одно случайно число в заданном Вами диапазоне<!--Select range for random integer--> <span class='glyphicon glyphicon-list-alt'></span></p>
			   
			   <div class="form-group ">
			  
                   <label for="intMin">Integer min:</label>
                   <input type="number" class="form-control" id="randInteger_Input" placeholder="Минимальное число диапазона">
				  
               </div>
			   
			   <div class="form-group">
			    
                   <label for="intMax">Integer max:</label>
                   <input type="number" class="form-control" id="randInteger_Input2" placeholder="Максимальное число диапазона">
				 
               </div>
			   
    		   <!--<form role="form col-xs-4">  	  				  		  	   				  		
    		     <div class="form-group">
    			   <textarea class="form-control" rows="6" placeholder="Your text here.." id='coordsInput' required>
				   </textarea>	  		  				  			
    			 </div> -->
    				  		
               <!---------------------------------------------------TextArea FORm  END------------------------------------------------->		
    		 </div><!-- /.col-md-5 --> <!-- END  <div class="col-md-5">-->

             <!----------------------END id="randIntegerDiv DIV 222----------------------------------->

  
  
  
  
  
  
  
            <!------------------------START id="randIntegList" DIV 333 (hidden by default)(returns a list of random int within range) -------------------------------------->
    		 <!-- Each div should have id = checkboxID + "Div", input should be checkboxID + "_Input" to automate it in JS -->
			 <div class="col-md-12 random" id="randIntegListDiv"> <!--5-->       
    	

               <!--------------------------------------------------- TextArea FORm  Start------------------------------------------------->
    		   <p> Генерирует случайный список номеров в заданном Вами диапазоне. Допустимый максимальный диапазон 3000 <!--Select range for random integer lists--> <span class='glyphicon glyphicon-check'></span></p>
			   
			   <div class="form-group ">
			  
                   <label for="intMin">Integer min:</label>
                   <input type="number" class="form-control" id="randIntegList_Input"placeholder="Минимальное число диапазона">
				  
               </div>
			   
			   <div class="form-group">
			    
                   <label for="intMax">Integer max:</label>
                   <input type="number" class="form-control" id="randIntegList_Input2" placeholder="Максимальное число диапазона">
				 
               </div>
			   
    				  		
               <!-------------------------------TextArea FORm  END------------------------------------------------->		
    		 </div><!-- /.col-md-5 --> <!-- END  <div class="col-md-5">-->

             <!----------------------END id="randIntegerDiv DIV 3333----------------------------------->
			 
			 
			 
			 
			 
  
  
  
  







<!-------------------------------------------------------START BUTTONS---------------------------------------->
                                        <!--mine-->
					<br>
					<div class="col-md-8"  id="" style="margin-top:33px;">  


    				  	   
										
    				  		<button id="splitButton" type="button" class="btn btn-primary btn-embossed btn-lg btn-wide bt-mobile-mine">Старт<!--Random it--></button>
                            <button id="clearButton" type="button"  class="btn btn-primary btn-embossed btn-lg btn-wide bt-mobile-mine">Сброс<!--Reset--></button >
							<button id="examplebutton" type="button" class="btn btn-primary btn-embossed btn-lg btn-wide bt-mobile-mine">Пример<!--Example--></button>
                            <button id="instructionButton" type="button" class="btn btn-primary btn-embossed btn-lg btn-wide bt-mobile-mine">Инструкция<!--Instruction--></button>
                            <!--<button id="cr_footer" type="button" class="btn btn-primary btn-embossed btn-lg btn-wide">CR Footer</button>-->
    				</div>
<!-------------------------------------------------------START BUTTONS---------------------------------------->







<!------------------------------------------INSTR  WORKING------------------------------->
<br><div class="col-md-8 jumbotron"  id="hiddenInstructions" style="display:none;margin-top:2%;"> 

<!-- INSTRUCTIONS-->

<!--RU-->

<!--<a href='#' target="_blank" style="font-size:18px; "/>View Video Instructions</a>-->


<!-- END RU-->

Генерирует случайный порядок Вашего списка.<br> Каждый пункт списка или имена вводить с новой строки, через Enter  &nbsp; <span class='glyphicon glyphicon-user'></span>
<br>1.Вставте список в поле ввода или выберите диапазон цифр.
<br>2.Нажмите кпопку "Пуск".
<br>3.С помощью "Copy"  можно скопировать результат.
<!--<br>Click <span style="color:red;">"Errors" </span> to see Errors summary or click "show more details" to view errors in original text. -->




<!--END  INSTRUCTIONS-->

 </div>
<!-----------------------------------------END INSTR---------------------->



					
					
					
					
					
					<!--------------------------------mine RESULTS------------------------------------->
					<br><br>
					<div class="col-md-8"  id="resultFinal" style="margin-top:33px;"></div> <br><br><br>
					<!--------------------------------- end  mine-------------------------------------->
					
    		                          

<!--------------  some---------->
<br><br>
<div class="col-md-8">
<p id="highLight_errors_button" style="display:none;cursor:pointer;padding:10px;margin-top:17px;text-decoration:underline;color:red;">show more details >></p>
<div id="highLight_errors" style="display:none;padding:19px;border:1px dotted red;box-shadow: 5px 5px 25px red ;"><!-- Highlights with red double spaces-->
</div><!--end id="highLight_errors -->
<br><br>
</div><!--div class="col-md-8">-->
<!----------------end some------>


                                    

    			</div><!-- /.container -->
				
				
				
					
					
					
    		
    		</div><!-- /.wrapper -->

                <div style="height:77px;"></div>


    	
    	</div><!-- /.item -->
		
		
		
		
		  <!-----Footer ---->
		        
				<div class="footer">
				    Contact: <strong>dimmm931@gmail.com</strong><br>
					<?php  echo date("Y"); ?>
				</div>
		<!--END Footer ---->  
		
		
		
		
		<!-- ##### -- Advertise -- #### -->
		   <div class="ads ">
		        <a target="_blank" href="https://www.facebook.com/events/165143454205556/" id="link">
				    <img src="images/ads/sub_od.jpg" alt="Submerged"/>  
				</a>	
			</div>
		<!-- ##### -- END Advertise -- #### -->
		
		
		
		
    
    </body>
</html>




<!--
<?php
// Record (with CLASS) all the  input  to  txt;  //;
      include("Classes/RecordTxt.php");
      RecordTxt::RecordAnyInput(array(/*$user*/), 'recordText/random.txt');// Record  to  text;
//End  Record;
?>-->
