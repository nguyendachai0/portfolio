<?php

// PageController.php

namespace App\Http\Controllers;

use App\Models\WorkModel;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('layouts.home');
    }

    public function about()
    {
        return view('layouts.about');
    }

    public function works()
    {
        // Assuming you want to fetch all records from the "works" table
        $works = WorkModel::all();
        // Organize the works into arrays containing two records each
        $groupedWorks = $works->chunk(2);
        // Get the count of all works
        $worksCount = $works->count();


        return view('layouts.works', ['works' => $works, 'groupedWorks' => $groupedWorks, 'worksCount' => $worksCount]);
    }

    public function contact()
    {
        return view('layouts.contact');
    }
    public function download()
    {
        // File to be downloaded
        echo '<pre>';
        var_dump('hw');
        echo '</pre>';
        $file = 'Nguyen_Dac_Hai_CV.pdf';

        // Check if the file exists
        if (file_exists($file)) {

            // Set appropriate headers for download
            header('Content-Description: File Transfer');
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename=' . basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));

            // Read the file and output it to the browser
            readfile($file);

            // Exit the script
            exit;
        } else {
            // If the file does not exist, you can redirect or display an error message
            die('File not found');
        }
    }
}
