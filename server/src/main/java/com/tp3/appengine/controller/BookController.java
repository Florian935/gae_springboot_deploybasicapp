package com.tp3.appengine.controller;

import com.tp3.appengine.domain.Book;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("/books")
public class BookController {

    @GetMapping
    public Book getOne() {
        return new Book("Mon beau livre");
    }

    @PostMapping
    public Book save(@RequestBody Book book) {
        return book;
    }
}
