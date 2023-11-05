# Introduction

This is a department web framework built using mvc architectural pattern

## Data
Make sure that you have a user json file in a folder named data on the project root directory data/user.json.

### YAML: An alternative to JSON

Yaml is human readable allowing for easy data typing
```
- id: 1
  name: Abdulmumin Eneye
  email: eneye@gmail.com
- id: 2
  name: Yusuf Abdulkarim
  email: abdul@gmail.com
```

## Development

I will explain the workflow to follow when editing this source code.

### Use Case: Adding a home page route '/'

- Creating the controller class: In /src/Controllers, Create a HomeController class that extends the MVC\Controller class located in /src.
- Creating the action method: In the body of HomeController class, add an action method (I call mine index), you can name the method using any valid name.
```
    public function index(){ 
        $this->render('home/index');
    }
```
- Creating the view template: In /src/Views, create a new directory named home within which you create a template index.phtml file that contains your html markup.
```
    <h1>Home Page</h1>
```
- Finally, Adding the home route: In /src edit the routes.php file, add a new route for / using the Router addRoute() method.
```
    $router->addRoute('/', HomeController::class, 'index');
```   
The first argument is the route uri, second argument is the controller, and third argument is the action.

## Site Details
We have several information categories:

1. Site wide information
1. Page specific information
1. Section (partials) specific information