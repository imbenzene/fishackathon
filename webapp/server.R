library(grid)
library(raster)

shinyServer(function(input, output) {
  require(jpeg)
  img <- readJPEG("content5.jpg")
  
  filedata <- reactive({
    infile <- input$datafile
    if (is.null(infile)) {
      # User has not uploaded a file yet
      return(NULL)
    }
    readJPEG(infile$datapath)
  })
  
  
 
  plot <- function(img){
    return( grid.raster(img))
  }
  
  output$finalPlot <- renderPlot({ 
   
    
    df <-filedata()
    if (is.null(df)) return(NULL)
    print(plot(img));
    
    })
})



