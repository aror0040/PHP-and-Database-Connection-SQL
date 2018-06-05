<nav class="navbar navbar-expand-lg navbar-light bg-dark">
   
   <!--anchor tag for brands--->
    <a class="navbar-brand" href="#"></a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               
                <span class="navbar-toggler-icon"></span>
    </button>
    
              
    <!--------------------------------div for navigation----------------------->          
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
               <!-----------home------------->
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <!-----------------about---------------->
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
               <!------------------contact--------------->
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item dropdown">
               <!-----------------------prducts to be selected--------------->
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Select Product
                    </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="./index.php?data-prod=eg">Electric Guitars</a>
                    <a class="dropdown-item" href="./index.php?data-prod=ag">Acoustic Guitars</a>
                    <a class="dropdown-item" href="./index.php?data-prod=cg">Classical Guitars</a>
                </div>
            </li>
        </ul>
    </div>
</nav>