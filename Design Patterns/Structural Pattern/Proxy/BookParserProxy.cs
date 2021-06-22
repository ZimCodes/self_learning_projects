using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Proxy
{
    class BookParserProxy : BookParser,IBookParser
    {
        
        private BookParser parser;
        public BookParserProxy(string book):base(book)
        {
        }

        public override int getNumPages()
        {
            if (this.parser == null)
            {
                this.parser = new BookParser(this.book);
            }
            return this.parser.getNumPages();
        }
    }
}
