function build_menu(tp,opc)
{
  var fg_f = new Image;
  fg_f.src = figuras[0];
  
  var bm_f = document.getElementById('build-menu');
  
  var dv_f = document.createElement('div');
  dv_f.style.position = "relative";
  dv_f.setAttribute('id','dv_princ');
  

  var tb_f = document.createElement('table');
  tb_f.setAttribute('id','tb_princ');
  tb_f.width = "100%";
  tb_f.style.height = fg_f.height;
  tb_f.border = "0";
  tb_f.cellSpacing = "0";
  tb_f.cellPadding = "0";

  var tr_f = tb_f.insertRow(0);
  var td_f = new Array(opc.length);
  for(i = 0; i < opc.length; i++)
  {
    td_f[i] = tr_f.insertCell(i);
	td_f[i].style.background = 'url('+figuras[0]+')';
	
	td_f[i].onmouseover = function()
	{
	  this.style.background = 'url('+figuras[1]+')';
	}
	
	td_f[i].onmouseout = function()
	{
	  this.style.background = 'url('+figuras[0]+')';
	}
	
	if (opc[i].href != null)
      td_f[i].innerHTML = '<a href="'+opc[i].href+'" class="A"><div align="center"><font face="verdana" size="2"><b>'+opc[i].descricao+'</b></font></div></a>';	
	else
      td_f[i].innerHTML = '<div align="center"><font face="verdana" size="2" color="#FFFFFF"><b>'+opc[i].descricao+'</b></font></div>';	
	
	if (opc[i].filhos != null)
	  build_subh(opc[i].filhos,td_f[i]);
  }
  dv_f.appendChild(tb_f);
  bm_f.appendChild(dv_f);
//  alert(bm_f.innerHTML);
}

function build_subh(sopc,obj)
{
  var sfg_f = new Image;
  sfg_f.src = figuras[0];

  var sdv_f = document.createElement('div');
  sdv_f.style.position = 'absolute';
//  sdv_f.style.visibility = "hidden";
  sdv_f.style.display = "none";
  sdv_f.style.top = sdv_f.style.top + sfg_f.height;
//  sdv_f.style.left = 

  var stb_f = document.createElement('table');
//  stb_f.setAttribute('id','tb_princ');
//  stb_f.width = "100%";
//  stb_f.height = sfg_f.height;
  stb_f.border = "0";
  stb_f.cellSpacing = "0";
  stb_f.cellPadding = "0";

  var str_f = new Array(sopc.length);
  var std_f = new Array(sopc.length);
  for(p = 0; p < sopc.length; p++)
  {
    str_f[p] = stb_f.insertRow(p);
	str_f[p].style.height = sfg_f.height;
	str_f[p].align = "right";
//	str_f[p].width = "100%";

	std_f[p] = str_f[p].insertCell(0);
	std_f[p].style.background = 'url('+figuras[0]+')';

//	std_f[p].style.align = "left";

	std_f[p].onmouseover = function()
	{
	  this.style.background = 'url('+figuras[1]+')';
	}
	
	std_f[p].onmouseout = function()
	{
	  this.style.background = 'url('+figuras[0]+')';
	}
	
	if (sopc[p].href != null)
	  std_f[p].innerHTML = '<a href="'+sopc[p].href+'" class="A"><div align="center"><font face="verdana" size="2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+sopc[p].descricao+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></div></a>';
	else
	  std_f[p].innerHTML = '<div align="center"><font face="verdana" size="2" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+sopc[p].descricao+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></div>';
	  
	if (sopc[p].filhos != null)
	  build_subh(sopc[p].filhos,std_f[p]);
  
	obj.onmouseover = function()
	{
	  sdv_f.style.display = "";
//	  sdv_f.style.left = event.x-event.y;
 	  obj.style.background = 'url('+figuras[1]+')';
	}
	
	obj.onmouseout = function()
	{
	  sdv_f.style.display = "none";
	  obj.style.background = 'url('+figuras[0]+')';
	}
  }
  sdv_f.appendChild(stb_f);
  obj.appendChild(sdv_f);
}
function CriaMenu(descricao,filhos,href) 
{ 
  this.descricao=descricao; 
  this.filhos=filhos; 
  this.href=href;
} 

var figuras = ['sub-button-tile.gif','sub-buttonOver-tile.gif','sub-button-left.gif','sub-buttonOver-left.gif','sub-button-right.gif','sub-buttonOver-right.gif'];

var op4 = new Array(10);
op4[0] = new CriaMenu("Nota Fiscal",null,"consulta_nota.php");
op4[1] = new CriaMenu("Compras",null,"consulta_compra.php");
op4[2] = new CriaMenu("Contas Pagar",null,"consulta_contapag.php");
op4[3] = new CriaMenu("Contas Receber",null,"consulta_contarec.php");
op4[4] = new CriaMenu("Fornecedor",null,"consulta_fornecedor.php");
op4[5] = new CriaMenu("Funcionário",null,"consulta_funcionario.php");
op4[6] = new CriaMenu("Itens Compra",null,"consulta_itensc.php");
op4[7] = new CriaMenu("Itens Venda",null,"consulta_itensv.php");
op4[8] = new CriaMenu("Produto",null,"consulta_produto.php");
op4[9] = new CriaMenu("Tipo Produto",null,"consulta_tp.php");
op4[10] = new CriaMenu("Tipo Ppagamento",null,"consulta_tpg.php");
op4[11] = new CriaMenu("Vendas",null,"consulta_venda.php");


var op3 = new Array(10);
op3[0] = new CriaMenu("Nota Fiscal",null,"html_exnota.php");
op3[1] = new CriaMenu("Compras",null,"html_excompra.php");
op3[2] = new CriaMenu("Contas Pagar",null,"html_excontapag.php");
op3[3] = new CriaMenu("Contas Receber",null,"html_excontarec.php");
op3[4] = new CriaMenu("Fornecedor",null,"html_exfornecedor.php");
op3[5] = new CriaMenu("Funcionário",null,"html_exfuncionario.php");
op3[6] = new CriaMenu("Itens Compra",null,"html_exitensc.php");
op3[7] = new CriaMenu("Itens Venda",null,"html_exitensv.php");
op3[8] = new CriaMenu("Produto",null,"html_exproduto.php");
op3[9] = new CriaMenu("Tipo Produto",null,"html_extp.php");
op3[10] = new CriaMenu("Tipo Ppagamento",null,"html_extpg.php");
op3[11] = new CriaMenu("Vendas",null,"html_exvenda.php");


var op2 = new Array(10);
op2[0] = new CriaMenu("Nota Fiscal",null,"html_alternota.php");
op2[1] = new CriaMenu("Compras",null,"html_altercompra.php");
op2[2] = new CriaMenu("Contas Pagar",null,"html_altercontapag.php");
op2[3] = new CriaMenu("Contas Receber",null,"html_altercontarec.php");
op2[4] = new CriaMenu("Fornecedor",null,"html_alterfornecedor.php");
op2[5] = new CriaMenu("Funcionário",null,"html_alterfuncionario.php");
op2[6] = new CriaMenu("Itens Compra",null,"html_alteritensc.php");
op2[7] = new CriaMenu("Itens Venda",null,"html_alteritensv.php");
op2[8] = new CriaMenu("Produto",null,"html_alterproduto.php");
op2[9] = new CriaMenu("Tipo Produto",null,"html_altertp.php");
op2[10] = new CriaMenu("Tipo Ppagamento",null,"html_altertpg.php");
op2[11] = new CriaMenu("Vendas",null,"html_altervenda.php");

var op1 = new Array(10);
op1[0] = new CriaMenu("Nota Fiscal",null,"html_nota_front.php");
op1[1] = new CriaMenu("Compras",null,"html_compra_front.php");
op1[2] = new CriaMenu("Contas Pagar",null,"html_contapag_front.php");
op1[3] = new CriaMenu("Contas Receber",null,"html_contarec_front.php");
op1[4] = new CriaMenu("Fornecedor",null,"html_fornecedor_front.php");
op1[5] = new CriaMenu("Funcionário",null,"html_funcionario_front.php");
op1[6] = new CriaMenu("Itens Compra",null,"html_itensc_front.php");
op1[7] = new CriaMenu("Itens Venda",null,"html_itensv_front.php");
op1[8] = new CriaMenu("Produto",null,"html_produto_front.php");
op1[9] = new CriaMenu("Tipo Produto",null,"html_tp_front.php");
op1[10] = new CriaMenu("Tipo Ppagamento",null,"html_tpg_front.php");
op1[11] = new CriaMenu("Vendas",null,"html_venda_front.php");

var op = new Array(4);
op[0] = new CriaMenu("Cadastrar",op1,null);
op[1] = new CriaMenu("Alterar",op2,null);
op[2] = new CriaMenu("Excluir",op3,null);
op[3] = new CriaMenu("Consultar",op4,null);

build_menu(1,op)