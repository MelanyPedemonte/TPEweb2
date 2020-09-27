{include file="header.tpl"}
<div class="container">
               {foreach from=$productos item=producto}
            <tr>
                <td><a href="productos/{$producto.id_producto}">{$producto.nombre_producto}</a></td>
            </tr>      
          {/foreach}
          </tbody>
          </table>                                

</div>     

{include file="footer.tpl"}
