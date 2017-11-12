package projetoPdfGradle;

import java.io.FileOutputStream;
import java.io.IOException;

import com.lowagie.text.Document;
import com.lowagie.text.DocumentException;
import com.lowagie.text.Paragraph;
import com.lowagie.text.pdf.PdfWriter;

public class GeneratorPDF {
	public static void main(String[] args) {
        // criação do documento
       Document document = new Document();
       try {
          
           PdfWriter.getInstance(document, new FileOutputStream("C:\\Users\\daniela.edvana\\Desktop\\DM107\\daniela.pdf"));
           document.open();
          
           // adicionando um parágrafo no documento
           document.add(new Paragraph("Gerando PDF - Java"));
}
       catch(DocumentException de) {
           System.err.println(de.getMessage());
       }
       catch(IOException ioe) {
           System.err.println(ioe.getMessage());
       }
       document.close();
   }   
}
