<?php

spl_autoload_register(function($clase)
{
    // primera carpeta para consultar si esta el include_required
    $fichero=$_SERVER['DOCUMENT_ROOT'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'/')).'/config/'.$clase.'.php';
    if(file_exists($fichero))
    {
        include_once $fichero;
    }else{
    // segunda carpeta para consultar si esta el include_required
        $fichero=$_SERVER['DOCUMENT_ROOT'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'/')).'/helpers/'.$clase.'.php';
        if(file_exists($fichero))
        {
            include_once $fichero;
        }else{
    // tercera carpeta para consultar si esta el include_required
            $fichero=$_SERVER['DOCUMENT_ROOT'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'/')).'/Interface/'.$clase.'.php';
            if(file_exists($fichero))
            {
                include_once $fichero;
            }else{
    // cuarta carpeta para consultar si esta el include_required
                $fichero=$_SERVER['DOCUMENT_ROOT'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'/')).'/modelo/'.$clase.'.php';
                if(file_exists($fichero))
                {
                    include_once $fichero;
                }else{
    // quinta carpeta para consultar si esta el include_required
                    $fichero=$_SERVER['DOCUMENT_ROOT'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'/')).'/Repositorio/'.$clase.'.php';
                    if(file_exists($fichero))
                    {
                        include_once $fichero;
                    }
                }
            }
        }
    }

});
