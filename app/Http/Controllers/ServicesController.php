<?php


namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Renderer\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AdditionalService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class ServicesController extends Controller
{
    public function RenderServices(Request $request)
    {
        $services = AdditionalService::all();
        $additionalServices = $services->toArray();

        
        $isAdmin = Auth::user()->isadmin;
        
        return view('services', compact('additionalServices', 'isAdmin'));
    }

    public function update(Request $request)
{
    
    try {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'day' => 'required|string|max:50',
            'time' => 'required|string|max:50',
        ]);


        // Save the validated data into the database
        AdditionalService::create($validatedData);

        // Return a success message
        return response()->json(['message' => 'Database updated successfully!']);

    } catch (ValidationException $e) {
        // Handle validation errors
        return response()->json(['error' => 'Validation failed', 'details' => $e->errors()], 422);
    } catch (QueryException $e) {
        // Handle database errors
        return response()->json(['error' => 'Database error', 'details' => $e->getMessage()], 500);
    }
}

    public function deleteRecord(Request $request) {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $validatedName = $validated['name'];

        $record = AdditionalService::where('name', $validatedName)->firstOrFail();
       
        if (!$record) {
            return response()->json(['error' => 'Record not found.'], 404);
        }

        $record->delete();
        return response()->json(['message' => 'Record deleted successfully.']);

    }

    public function alterRecord(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'day' => 'required|string|max:50',
            'time' => 'required|string|max:50',
            'oldname' => 'required|string|max:255',
        ]);

        $record = AdditionalService::where('name', $validatedData['oldname'])->first();

        $record->update([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'day' => $validatedData['day'],
            'time' => $validatedData['time'],
        ]);

        return response()->json(['message' => 'Record updated successfully.']);

    }

 }