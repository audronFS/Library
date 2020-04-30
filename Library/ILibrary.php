<?php
namespace Library;
//search for a library account or a library item
interface searchable{
   public function searchItem(searchable $search_item, $lib_item);
}

interface updateable{
    public function updateRecords(updateable $update_item, $lib_item);
}

interface accessable{
    public function accessLibrary(accessable $account_item, $register);
}
