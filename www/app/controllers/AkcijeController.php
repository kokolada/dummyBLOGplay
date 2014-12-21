<?php 

class AkcijeController extends BaseController{

	public function upload(){
		$url = Image::upload($_FILES['image']);
		return View::make('upload')->with('url', $url);
	}

	public function dl(){
        //PDF file is stored under project/public/pdf/
        $pdf = DB::table('cdompdf')->orderBy('id', 'desc')->first();
        $file= $pdf->filepath.$pdf->filename.'.pdf';
        $headers = array(
            'Content-Type' => 'application/pdf',
        );

        return Response::download($file, $pdf->filename, $headers);
	}

}