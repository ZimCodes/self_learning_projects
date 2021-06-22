using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Bridge
{
    abstract class Shape
    {
        protected ColorAPI color;
        protected abstract Shape Drawshape();
        public abstract string getShape();
        public Shape(ColorAPI colorapi)
        {
            color = colorapi;
        }
    }
}
