<?php


class BlogPost {

    //CREATE
    /**
     * Create a new Calendar
     * @param string $calendarName
     * @return void
     */
    public function createCalendar(string $calendarName) { 
    }
    
    /**
     * Create a new calendar entry
     * @param string $entryComment
     * @param int $calendarID
     * @return void
     */
    public function createCalendarEntry(string $entryComment, int $calendarID) {
    }
    
    //READ
    /**
     * Read all calendar
     * @return list of calendar
     */
    public function readCalendar() {
    }
    
    /**
     * Read all calendar entrys from selected calendar
     * @param int $calendarID
     * @return list of entry in selected calendar
     */
    public function readCalendarEntry(int $calendarID) {
    }
    
    /**
     * Read all calendar entrys 
     * @param int $calendarID
     * @return all calendar entrys
     */
    public function readAllCalendarEntry() {
    }
    
    //UPDATE
    /**
     * Update the selected calendar entry
     * @param string $entryComment
     * @param int $calendarEntryID
     * @return void
     */
    public function updateCalendarEntry(string $entryComment, int $calendarEntryID) {
    }

    //DELETE
    /**
     * Delete selected calendar
     * @param int $calendarEntryID
     * @return delete object
     */
    public function deleteCalendar(int $calendarID){
    }

    /**
     * Delete selected calendar entry
     * @param int $calendarEntryID
     * @return delete object
     */
    public function deleteCalendarEntry(int $calendarEntryID){
    }

}
?>
