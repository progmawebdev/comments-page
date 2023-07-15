<?php
    $sql = 'SELECT * FROM comentarios';
    
    $resp = $conexao->query($sql);
    if ($resp->num_rows > 0){
        while($row = $resp->fetch_object()){
            
            echo " 
            <div class="."comment".">
            <div class="."comment-content".">
                <div class="."comment-username".">
                    <span>".$row->autor."</span>
                </div>
                <div class="."comment-usercomment".">
                    <p>".$row->comentario."</p>
                </div>
                <div class="."comment-btns".">
                    <button>Like</button>
                </div>
            </div>
        </div>
            
            ";
        }
    } else{
        echo '<h3> Ainda não existe comentários! </h3>';
    }
?>