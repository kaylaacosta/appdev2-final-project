<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;
use App\Models\Books;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $reservation = $request->user()->reservations;

        return response()->json($reservation);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_id' => 'required',
            'reserved_at' => 'required',
            'returned_at' => 'required',
        ]);

        try {
            // Retrieve the authenticated user's ID
            $user_id = Auth::id();

            // Create a new Reservation instance with user_id assigned
            $reservation = ReservationS::create([
                'user_id' => $user_id,
                'book_id' => $validated['book_id'],
                'reserved_at' => $validated['reserved_at'],
                'returned_at' => $validated['returned_at'],
            ]);

            return response()->json([
                'message' => 'You have successfully reserved a book.',
                'data' => $reservation
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to reserve a book. ' . $e->getMessage()
            ], 500);
        }
    }

    
    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        
        return response()->json(['data' => $reservation]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
            'reserved_from' => 'required|date',
            'reserved_to' => 'required|date|after:reserved_from',
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->update($validated);

        return response()->json(['message' => 'Reservation updated successfully.', 'data' => $reservation]);
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return response()->json(['message' => 'Reservation deleted successfully.']);
    }
}
