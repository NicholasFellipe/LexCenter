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

//<?php
//
///**
// * descricao Config
// * aramazena diversas informações do sistema/loja
// *
// * @author adrianosites.com.br
// */
//class Config {
//    
//    
//    /**
//     * INFORMAÇÕES DE BANCO DE DADOS =============
//     */
//    const BD_HOST = "localhost",
//          BD_USER = "agnald39_nic",
//          BD_SENHA= "outlet",
//          BD_BANCO= "agnald39_outletducao",
//          BD_PREFIX="as_",
//          BD_LIMITE_POR_PAG = 9;
//
//        
//    /**
//     * INFORMAÇÕES DO SITE =======================
//     */
//    /*** url do site*/
//    const SITE_URL   = "https://outletducao.com.br";
//    /*** pasta padrao do site */
//    const SITE_PASTA = "outletducao";
//    /** * nome do site  */
//    const SITE_NOME  = "Outlet Du Cao";
//    /**  * email do administrado do site   */
//    const SITE_EMAIl_ADM = "outletducao@gmail.com";
//    
//    /*** DADOS DE ENDERÇO FISICO DA LOJA ***/
//    const SITE_ENDERECO = '';
//    const SITE_FONTE    = '';
//    const SITE_CEP      = '12502480';
//
//    /**
//     * DADOS DO SERVIDOR DE EMAIL ==   daqui  pra baixo nao foi passado nos videos ainda 
//     */
//    const EMAIL_HOST  = "smtp.gmail.com"; // smtp.seusite.com.br
//    const EMAIL_USER  = "outletducao@gmail.com";
//    const EMAIL_NOME  = "Outlet Du Cao Nao Responda";
//    const EMAIL_SENHA = "Outletduc@0";
//    const EMAIL_PORTA   = 587;
//    const EMAIL_SMTPAUTH = true;
//    const EMAIL_SMTPSECURE= "tls";
//    const EMAIL_COPIA= "teste@teste.com";
//    
//    
// /**
//  *  DADOS DO PAGSEGURO 
//  */
//    const PS_EMAIL  = "outletducao@gmail.com"; // email pagseguro
//    const PS_TOKEN  = "EF13E2C1CB094454AF5A6543351579FD"; // token produção
//    const PS_TOKEN_SBX = "2ECBC98D9A90498BAB81362B42D9982E";  // token do sandbox
//    const PS_AMBIENTE = "production"; // production   /  sandbox
//    
//    
//    
//}
//
