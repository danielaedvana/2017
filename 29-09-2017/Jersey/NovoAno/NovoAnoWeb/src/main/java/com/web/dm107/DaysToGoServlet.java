package com.web.dm107;

import java.io.IOException;

import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.util.dm107.DateUtil;

public class DaysToGoServlet extends HttpServlet {


	private static final long serialVersionUID = 5603355510031168204L;

		public void doGet(HttpServletRequest req, HttpServletResponse resp)
				throws IOException {
			resp.setContentType("text/plain");
			resp.getWriter().println(new DateUtil().daysToNewYear());
		}
	}

