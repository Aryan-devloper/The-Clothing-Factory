<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{ 
    public function show()
    {
        $products = Product::all(); 
        return view('/gallery', compact('products')); 
        
    }
    public function view()
    {
        $products = Product::all();
        return view('admin.view_product', compact('products')); 
    }
    public function create()
    {
        return view('admin.product_add');  
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'size' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:50000',
        ]); 
        if ($request->hasFile('image')) {
            $filename = $request->file('image');   
            $extension = $filename->getClientOriginalExtension();
            $newFilename = time() . '.' . $extension;
            $filename->move('products', $newFilename);
            $imagepath = 'products/' . $newFilename;
        }
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'size' => $request->size,
            'color' => $request->color,
            'image' => isset($imagepath) ? $imagepath : null, 
            
        ]);
        return redirect()->route('admin.product_add')->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id); 
        
        return view('admin.edit_product', compact('product'));
    }
    
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'size' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5000',
        ]);
    
       
        
        if ($request->hasFile('image')) {
           
            
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            } 
            $filename = $request->file('image');
            $extension = $filename->getClientOriginalExtension();
            $newFilename = time() . '.' . $extension;
            $filename->move('products', $newFilename);
            $imagePath = 'products/' . $newFilename;
        } else {
            $imagePath = $product->image; 
            
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'size' => $request->size,
            'color' => $request->color,
            'image' => $imagePath,
        ]);
    
        return redirect('/admin/view-products')->with('success', 'Product updated successfully!');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
       
        
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image)); 
            
        }
        $product->delete(); 
        

        return redirect('view-product')->with('success', 'Product deleted successfully!');
    }

    public function exportCSV()
    {
        $fileName = 'products.csv';
        $products = Product::all();

        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $callback = function() use ($products) {
            $file = fopen('php://output', 'w');            
            fputcsv($file, ['ID', 'Name', 'Description', 'Price', 'Size', 'Color', 'Image']); 
            foreach ($products as $product) {
                fputcsv($file, [
                    $product->id,
                    $product->name,
                    $product->description,
                    $product->price,
                    $product->size,
                    $product->color,
                    $product->image
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

  
    
}
