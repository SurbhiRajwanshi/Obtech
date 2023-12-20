let feg = document.querySelector("#feg");
let template = document.createElement("template");

function toggleWhiteSection() {
  let whiteSection = document.getElementsByClassName("whiteSection")[0];

  if (
    whiteSection.style.display === "none" ||
    whiteSection.style.display === ""
  ) {
    whiteSection.style.display = "flex";
  } else {
    whiteSection.style.display = "none";
  }
}





template.innerHTML = `  <section id="header">

<!-- white strip  -->
<!-- navbar -->
<section class="navbar">

   <a href="index.php"><img class="logoImg" src="../assets/obtechofficiallogo.png" alt=""></a>
    <!-- navItems -->
    <div class="navItems">
    <i id="barming" class="fa-solid fa-bars barstyle"></i>
    <ul id="nani">
    
    
       <a href="index.php"><li id="ind" class="highlight">Home</li></a>
       <a href="about.php"><li id="abi">About us</li></a>
       <a href="teams.php"><li id="tea">Team</li></a>
        <li id="serv" onclick="toggleWhiteSection()">Services <span><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
            <path d="M4.54933 11.8456C4.59071 11.767 4.6114 11.676 4.66933 11.6139C5.29415 10.9808 5.9231 10.3518 6.55619 9.72289C6.79618 9.48703 7.06928 9.45807 7.33411 9.61944C7.58651 9.77668 7.72306 10.0746 7.62789 10.3353C7.58238 10.4553 7.49962 10.5753 7.40859 10.6663C6.38654 11.7008 5.35621 12.727 4.32589 13.7573C4.01141 14.0718 3.64728 14.0842 3.34108 13.7738C2.29834 12.7352 1.25974 11.6925 0.221139 10.6539C0.0390731 10.4718 -0.0478218 10.2649 0.0266596 10.0084C0.101141 9.75185 0.270793 9.60289 0.523202 9.5491C0.763197 9.49944 0.953538 9.59875 1.12319 9.76427C1.75214 10.3932 2.3811 11.0222 3.01419 11.6511C3.05143 11.6884 3.09695 11.7256 3.18798 11.8084C3.18798 11.6677 3.18798 11.5808 3.18798 11.4897C3.19212 7.90223 3.19212 4.31885 3.19625 0.731336C3.19625 0.31755 3.33694 0.114796 3.68452 0.0196251C4.02382 -0.0714076 4.38796 0.16445 4.44175 0.516167C4.4583 0.632027 4.4583 0.752025 4.4583 0.872023C4.4583 4.41816 4.45416 7.9643 4.45002 11.5104C4.45002 11.5932 4.45002 11.6801 4.45002 11.7628C4.47899 11.7918 4.51209 11.8208 4.54933 11.8456Z" fill="white"/>
          </svg></span>  
          
          
          <div class="whiteSection">

         
         <img class="logoImg sogo_img" src="../assets/serviceNav.png" alt="">
          

           <div class="whiteSectionList">
           <ul>

           <a href="services.php"> <li>SERVICES</li></a>
           <li>ERP Solutions</li>
           <li>eLearning Software Solutions</li>
           <li>E-commerce Web Applications</li>
           <li>Supply Chain Management</li>
           <li>UI/UX Design</li>
           <li>CRM Integration</li>
           <li>Web Services</li>
           </ul>
           </div>

          </div>


          </li>

         <a href="industries.php"><li id="indu">Industries</li></a>
         <a href="blog.php"><li id="blo">Blog</li></a>
        <a href="contact.php"><button>
            <span id="conti">Contact Us</span>
          </button></a>

          </ul>
   
        

    <div class="smallLogo">
    <img class="logoImg" src="../assets/smallLogo.png" alt="">
    </div>

    </div>


</section>




</section>
`;

feg.appendChild(template.content);
