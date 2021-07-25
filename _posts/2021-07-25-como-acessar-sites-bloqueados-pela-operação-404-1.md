---
layout: post
title: Como acessar sites bloqueados pela operação 404
meta_description: Veja como acessar sites bloqueados pela operação 404
author: andre_ribas
date: 2021-07-25 12:45:29
intro_paragraph: '<img
  src="https://lh5.googleusercontent.com/DTOkAKB8b4ELiq874YSYQa74CeDX3vWU7yAVy…NIUjXGkz_M8jkMqEbKmOnu8gLRDOk0uhc9R3PsI-u6bTT36mUCOODGcjuOh9fs_zx8PQ=w1280"
  class="CENy8b" style="width: 100.4146490872%; margin: 0% 0 0%
  -0.2073245436%">'
---
Bom, agora vou mostrar a vocês como acessar os sites que foram 'fechados' pelo Ministério da Justiça e Segurança Pública na operação 404



Na verdade é muito simples, basta apenas alterar o DNS da sua rede wi-fi. Existem vários serviços DNS públicos e seguros que você pode usar para contornar o bloqueio feito pelo seu provedor de internet (sim, sua operadora está impedindo você de acessar esses sites 😐) mas mesmo alterar o DNS não significa que você terá sucesso no acesso a todos os sites como eles ainda têm que 'obedecer' ao Ministério da Justiça e Segurança Pública (MJSP)

O que é DNS? 

Os servidores DNS (Domain Name System, ou sistema de nomes de domínios) são os responsáveis por localizar e traduzir para números IP os endereços dos sites que digitamos nos navegadores.



Imagine ter que acessar seus sites preferidos através de números de IP (Internet Protocol), memorizando sequências de números para cada um deles. Conseguiríamos acessar meia dúzia deles no máximo, mais ou menos a mesma quantidade de números de telefone que conseguimos memorizar, não é?



Para isso existem os domínios e os servidores de DNS espalhados pelo mundo com a simples função de traduzir os endereços digitados, como o nosso www.blog.andreribas.tk, para o número de IP correspondente.



Como alterar o DNS da minha rede Wi-Fi? (DNS Google)

No Windows
Acesse o menu “Iniciar”;

clique em “Configurações” » “Rede e Internet” » “Wi-Fi”;

escolha “Alterar opções de adaptador”;

clique com o botão direito em sua rede ativa » “Propriedades” (caso seja solicitada a senha de administrador, digite-a);

busque a opção “TCP/IPv4” (Protocolo IP Versão 4);

clique em “Propriedades”;

marque “Usar os seguintes endereços de servidor de DNS” e informe o valor 8.8.8.8 para o servidor DNS preferencial e 8.8.4.4 para o servidor DNS alternativo;

clique em “OK” para salvar as alterações.





No Linux
Abra o menu Sistema;

clique em “Preferências” » “Conexão de Rede” (verifique os nomes desses campos da sua versão Linux, pois eles podem variar);

escolha o tipo de rede que será alterada (com ou sem fio) e clique em “Configurações”;

clique em “IPv4” e selecione a opção “Automatic (DHCP)”;

clique no ícone “+” do campo DNS para adicionar os endereços;

digite 8.8.8.8 e 8.8.4.4. no campo DNS Server;

clique em “Save”.



No Mac
Acesse o menu da Apple;

clique em “Preferências do Sistema”;

acesse “Rede”;

escolha a conexão que será alterada;

clique em “Avançado”;

acesse a aba “DNS”;



apague os endereços na tabela esquerda e clique em “+” para informar os do Google;

insira “8.8.8.8” no campo primário e “8.8.4.4” no secundário;

salve as alterações.



No Android
Acesse as configurações do Android;

encontre a opção “Wi-Fi” e ative-a;





escolha a rede que será alterada e clique em “Gerenciar configurações de rede” ou “Modificar a rede”;

clique em “Opções avançadas”;





mude as “Definições IP” para “Estático”;

preencha o DNS 1 com “8.8.8.8” e o DNS 2 com “8.8.4.4”;

clique em “Salvar”.



No iOS
Acesse “Ajustes”;

encontre a opção “Wi-Fi”;



toque no ícone “i” que fica ao lado do nome da rede que será alterada;

toque sobre “Configurar DNS”;





toque em “Manual” » “Adicionar Servidor”;

adicione “8.8.8.8” e “8.8.4.4”;



apague os valores da operadora, tocando no ícone de “menos” (-) e depois em “Apagar”;

clique em salvar.



No roteador
Alterar as configurações diretamente no roteador faz com que toda a rede funcione sob as definições que serão implementadas, independentemente do dispositivo usado. Isso evita que você precise fazer configurações individuais.

Veja um passo a passo para fazer a configuração, embora ela possa mudar conforme o tipo de aparelho:

digite o endereço 192.168.0.1 no seu navegador e, para acessar o painel de configuração do roteador, insira as credenciais de administrador — geralmente, elas ficam na parte de baixo ou no manual do aparelho;



acesse a seção WAN do roteador (essa opção pode estar inserida nas abas LAN, DHCP ou Internet);



preencha os valores de “8.8.8.8” para o DNS primário e “8.8.4.4” para o DNS secundário;

salve as alterações.





Existem outros DNS além do DNS Google?

Sim. Veja a lista de DNS abaixo ⬇

Google DNS: 8.8.8.8 e 8.8.4.4

Cloudflare DNS: 1.1.1.1 e 1.0.0.1

Freenom World DNS: 80.80.80.80 e 80.80.81.81

Open DNS: 208.67.222.222 e 208.67.220.220

SafeDNS: 195.46.39.39 e 195.46.39.2

Esta página está sendo editada. Não se preocupe se estiver faltando alguma informação, eu irei adicionarei o mais rápido possível.