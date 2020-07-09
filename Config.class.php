<?php

/**
 * descricao Config
 * aramazena diversas informações do sistema/loja
 *
 * @author adrianosites.com.br
 */
class Config {
    
    
        /**
   * INFORMAÇÕES DE BANCO DE DADOS =============
//     */
   const BD_HOST = "localhost",
         BD_USER = "root",
         BD_SENHA= "",
         BD_BANCO= "outletducao",
         BD_PREFIX="as_",
        BD_LIMITE_POR_PAG = 9;
//
//        
//    /**
//     * INFORMAÇÕES DO SITE =======================
//     */
//    /*** url do site*/
   const SITE_URL   = "https://localhost";
   /*** pasta padrao do site */
    const SITE_PASTA = "outletducao";
//    /** * nome do site  */
   const SITE_NOME  = "Outlet Du Cao";
//    /**  * email do administrado do site   */
    const SITE_EMAIl_ADM = "";

    /**
     * DADOS DO SERVIDOR DE EMAIL ==   daqui  pra baixo nao foi passado nos videos ainda 
     */
    const EMAIL_HOST  = ""; // smtp.seusite.com.br
    const EMAIL_USER  = "";
    const EMAIL_NOME  = "Outlet Du Cao Nao Responda";
    const EMAIL_SENHA = "";
    const EMAIL_PORTA   = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE= "tls";
    const EMAIL_COPIA= "teste@teste.com";
    
    
 /**
  *  DADOS DO PAGSEGURO 
  */
    const PS_EMAIL  = ""; // email pagseguro
    const PS_TOKEN  = ""; // token produção
    const PS_TOKEN_SBX = "";  // token do sandbox
    const PS_AMBIENTE = ""; // production   /  sandbox
    
    
    
}

