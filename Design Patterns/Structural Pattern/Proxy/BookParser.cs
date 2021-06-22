using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Proxy
{
    class BookParser:IBookParser
    {
        protected string book;
        private static Random rand = new Random();
        public BookParser(string book)
        {
            this.book = book;
        }
        public virtual int getNumPages()
        {
            return rand.Next(10000);
        }
    }
}
