<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    // function index()
    // {
    //  return view('clients');
    // }

    function clients(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('clients')
         ->where('naziv', 'like', '%'.$query.'%')
         ->orWhere('adresa', 'like', '%'.$query.'%')
         ->orWhere('mesto', 'like', '%'.$query.'%')
         ->get();
         
      }
      else
      {
       $data = DB::table('clients')
         ->orderBy('naziv', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        //  $link = "route('client.show',$row->id)";
        $output .= "
        <tr>
         <td>$row->naziv</td>
         <td>$row->adresa</td>
         <td>$row->mesto</td>
         <td>$row->tekuci_racun</td>
         <td>$row->email</td>
         <td class='table-text has-text-centered'><a href='klijent/$row->id' class='eye-icon'><i class='fa fa-eye'></i></a></td>
        </tr>
        ";
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" class="has-text-centered no-data" colspan="6">Nema podataka za datu pretragu</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

    // function workbooks(Request $request)
    // {
    //  if($request->ajax())
    //  {
    //   $output = '';
    //   $query = $request->get('query');
    //   if($query != '')
    //   {
    //    $data = DB::table('workbooks')
    //      ->where('predmet', 'like', '%'.$query.'%')
    //     //  ->orWhere('posiljalac', 'like', '%'.$query.'%')
    //     //  ->orWhere('mesto', 'like', '%'.$query.'%')
    //      ->get();
         
    //   }
    //   else
    //   {
    //    $data = DB::table('workbooks')
    //      ->orderBy('created_at', 'desc')
    //      ->get();
    //   }
    //   $total_row = $data->count();
    //   if($total_row > 0)
    //   {
    //    foreach($data as $row)
    //    {
    //     //  $link = "route('client.show',$row->id)";
    //     $output .= "
    //     <tr>
    //      <td>$row->osnovni_broj</td>
    //      <td>$row->predmet</td>
    //     <td>$row->posiljalac</td>
    //      <td>$row->datum_prijema</td>
    //      <td class='table-text has-text-centered'><a href='delovodnik/$row->id' class='eye-icon'><i class='fa fa-eye'></i></a></td>
    //     </tr>
    //     ";
    //    }
    //   }
    //   else
    //   {
    //    $output = '
    //    <tr>
    //     <td align="center" class="has-text-centered no-data" colspan="6">Nema podataka za datu pretragu</td>
    //    </tr>
    //    ';
    //   }
    //   $data = array(
    //    'table_data'  => $output,
    //    'total_data'  => $total_row
    //   );

    //   echo json_encode($data);
    //  }
    // }
}



