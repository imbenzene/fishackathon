shinyUI(pageWithSidebar(
  headerPanel("Choose the Image"),
  
  sidebarPanel(width=1,
     fileInput('datafile', 'Choose the image: (PNG/Jpeg)',
               accept='image')
 #  submitButton("Update View") 
# fileInput("in_file", "Input file:",
#           accept=c("txt/csv", "text/comma-separated-values,text/plain", ".csv")),
# checkboxInput(inputId="is_header", label="Does the input file have column names?", value=TRUE),
# actionButton("upload_data", "Upload Data")
  ),
  
  mainPanel(
    plotOutput("finalPlot")
  )
))