<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    //
    public function index()
    {
      $users = DB::select('select * from member where active = 1');
      return view('member_view', ['users' => $users]);
    }

    public function insertform()
    {
      return view('new_member');
    }

    public function insert(Request $request)
    {
      $noMember = $request->input('noMember');
      $name = $request->input('name');
      $noIc = $request->input('noIc');
      $noTel = $request->input('noTel');
      $note = $request->input('note');

      DB::insert('insert into member (noMember, name, noIc, noTel, active, note)
       values (?, ?, ?, ?, ?, ?)', [$noMember, $name, $noIc, $noTel, '1', $note]);

      return Redirect::to('memberlist');
    }

    public function show($memberId)
    {
      $users = DB::select('select * from member where memberId = ?', [$memberId]);
      return view('member_update', ['users' => $users]);
    }

    public function edit(Request $request, $memberId)
    {
      $noMember = $request->input('noMember');
      $name = $request->input('name');
      $noIc = $request->input('noIc');
      $noTel = $request->input('noTel');
      $note = $request->input('note');

      DB::update('update member set noMember = ?, name = ?, noIc = ?, noTel = ?, note = ? where memberId = ?', [$noMember, $name, $noIc, $noTel, $note, $memberId]);

      return Redirect::to('memberlist');
    }

    public function delete(Request $request, $memberId)
    {
      DB::update('update member set active = ? where memberId = ?', ['0', $memberId]);

      return Redirect::to('memberlist');
    }
}
